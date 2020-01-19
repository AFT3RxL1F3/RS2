<?php
class Page extends CI_Controller
{

	public function view($page = 'home')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['pageTitle'] = $page;
		$this->load->view('html-doc-head/page', $data);
		$this->load->view('widgets/rsn');
		$this->load->view('pages/' . $page, $data);
		$this->load->view('widgets/slide-show');
	}
}
