<?php
namespace Opencart\Catalog\Controller\Extension\Opencart\Total;
class Coupon extends \Opencart\System\Engine\Controller {
	public function index(): string {
		if ($this->config->get('total_coupon_status')) {
			$this->load->language('extension/opencart/total/coupon');

			if (isset($this->session->data['coupon'])) {
				$data['coupon'] = $this->session->data['coupon'];
			} else {
				$data['coupon'] = '';
			}

			return $this->load->view('extension/opencart/total/coupon', $data);
		}
	}

	public function save(): void {
		$this->load->language('extension/opencart/total/coupon');

		$json = [];

		$this->load->model('extension/opencart/total/coupon');

		if (isset($this->request->post['coupon'])) {
			$coupon = $this->request->post['coupon'];
		} else {
			$coupon = '';
		}

		$coupon_info = $this->model_extension_opencart_total_coupon->getCoupon($coupon);

		if (empty($this->request->post['coupon'])) {
			$json['error'] = $this->language->get('error_empty');

			unset($this->session->data['coupon']);
		} elseif ($coupon_info) {
			$this->session->data['coupon'] = $this->request->post['coupon'];
			$this->session->data['success'] = $this->language->get('text_success');

			$json['redirect'] = $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'), true);
		} else {
			$json['error'] = $this->language->get('error_coupon');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function remove(): void {
		$this->load->language('extension/opencart/total/coupon');

		$json = [];

		if (isset($this->session->data['coupon'])) {
			unset($this->session->data['coupon']);

			$this->session->data['success'] = $this->language->get('text_remove');
		}

		$json['redirect'] = $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'), true);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
