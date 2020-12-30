<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function transports_selection()
	{
		$transModel = new \App\Models\TransportModel();
		$uno = $transModel->findAll();
		return view('transports_selection');
	}

	public function transports($class)
	{
		$parser = \Config\Services::parser();
		$transModel = new \App\Models\TransportModel();
		$transports = $transModel->where('transport_class', $class)->findAll();
		$color = array('starships'=>'warning','vehicles'=>'success');
		$data = ['color'=>$color[$class],'transports' => $transports];
		$p = $parser->setData($data)->render('transports_cards');
		$dd = array('transportClass'=>$class,'st'=>$p);
		echo view('transports_list',$dd);
	}

	public function TransportInfo($tclass,$number){
		$url = $this->GetenerateUrlForTransport($tclass,$number);
		$client = \Config\Services::curlrequest();
		$response = $client->request('GET', $url);
		$body = $response->getBody();
		$transModel = new \App\Models\TransportModel();
		$t = $transModel->where('number', $number)->where('transport_class',$tclass)->first();
		$r = json_decode($body);
		$data = array('id'=>$t['id'],'count'=>$t['count'],'info'=>$r);
		$this->response->setJSON($data);
		echo json_encode($data);
	}

	public function TransportCount($tid,$count,$operation){
		$transModel = new \App\Models\TransportModel();
		$t = $transModel->where('id', $tid)->first();
		$oldCount = $t['count'];
		switch($operation){
			case 'increment':
				$value = $oldCount + $count;
			break;
			case 'reduce':
				$value = $oldCount - $count;
			break;
		}
		$transModel->update($tid,array('count'=>$value));
		$data = array('id'=>$tid,'count'=>$value);
		$this->response->setJSON($data);
		echo json_encode($data);
	}

	private function GetenerateUrlForTransport($tclass,$number){
		$data = "https://swapi.dev/api/$tclass/$number/?format=json";
		return $data;
	}

}
