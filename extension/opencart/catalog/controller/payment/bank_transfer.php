<?php
namespace Opencart\Catalog\Controller\Extension\Opencart\Payment;
class BankTransfer extends \Opencart\System\Engine\Controller {
	public function index(): string {
		$this->load->language('extension/opencart/payment/bank_transfer');

		$data['bank'] = nl2br($this->config->get('payment_bank_transfer_bank_' . $this->config->get('config_language_id')));

		return $this->load->view('extension/opencart/payment/bank_transfer', $data);
	}

	public function confirm(): void {
		$json = [];

		if (isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'bank_transfer') {
			$this->load->language('extension/opencart/payment/bank_transfer');

			$this->load->model('checkout/order');

			$comment  = $this->language->get('text_instruction') . "\n\n";
			$comment .= $this->config->get('payment_bank_transfer_bank_' . $this->config->get('config_language_id')) . "\n\n";
			$comment .= $this->language->get('text_payment');

			$this->model_checkout_order->addHistory($this->session->data['order_id'], $this->config->get('payment_bank_transfer_order_status_id'), $comment, true);

			$json['redirect'] = $this->url->link('checkout/success', 'language=' . $this->config->get('config_language'), true);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
