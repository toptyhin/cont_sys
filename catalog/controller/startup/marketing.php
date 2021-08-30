<?php
namespace Opencart\Catalog\Controller\Startup;
class Marketing extends \Opencart\System\Engine\Controller {
	public function index(): void {
		// Tracking Code
		if (isset($this->request->get['tracking'])) {
			$option = [
				'expires'  => time() + 3600 * 24 * 1000,
				'path'     => '/',
				'SameSite' => $this->config->get('session_samesite')
			];

			setcookie('tracking', $this->request->get['tracking'], $option);

			$this->load->model('marketing/marketing');

			$marketing_info = $this->model_marketing_marketing->getMarketingByCode($this->request->get['tracking']);

			if ($marketing_info) {
				$this->model_marketing_marketing->addReport($marketing_info['marketing_id'], $this->request->server['REMOTE_ADDR']);
			}

			$this->load->model('account/affiliate');

			$affiliate_info = $this->model_account_affiliate->getAffiliateByTracking($this->request->get['tracking']);

			if ($affiliate_info) {
				$this->model_account_affiliate->addReport($affiliate_info['customer_id'], $this->request->server['REMOTE_ADDR']);
			}
		}
	}
}
