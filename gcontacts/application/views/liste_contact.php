<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// un lien (anchor) est suffisant !

echo form_open('contacts/create',array('method'=>'get','style'=>'text-align:right'));
echo form_submit('','Ajouter');
echo form_close();

// on peut construire la table à la main également

$this->table->set_heading(array('Nom', 'Prénom', 'Email',''));

$template = array(
	'table_open' => '<table class="contacts">'
);

$this->table->set_template($template);

foreach ($contacts as $contact){
	$this->table->add_row(
		$contact->nom,
		$contact->prenom,
		$contact->email,
		array(
			'data'=>anchor('contacts/delete/'.$contact->id,
			'<i class="fa fa-times"></i>',
			array('class'=>'btn btn-danger'))." ".
			anchor('contacts/edit/'.$contact->id,
				'<i class="fa fa-search"></i>',
				array('class'=>'btn btn-info')),
			'style'=>"text-align:right")
		);
}

echo $this->table->generate();
?>

