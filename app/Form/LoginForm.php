<?php

namespace App\Form;

use App\Core\Form;

class LoginForm extends Form
{
	public function __construct(string $action)
	{
		$this
			->startDiv(['class' => 'container d-flex justify-content-center'])
			->startDiv(['class' => 'my-5 p-4 bg-dark border-bottom border-light', 'style' => 'max-width: 500px; width: 100%;'])
			->startForm($action, 'POST', [
				'id' => 'form-login',
				'formnovalidate' => true,
			])
			->startDiv(['class' => 'form-floating mb-4'])
			->addInput('email', 'email', [
				'class' => 'form-control input-focus-effect',
				'id' => 'email',
				'placeholder' => ' ', // Ajoutez un espace pour le label flottant 
				'required' => true,
			])
			->addLabel('email', 'Email', [
				'class' => 'form-label fw-bold required',
			])
			->endDiv()
			->startDiv(['class' => 'form-floating mb-4'])
			->addInput('password', 'password', [
				'class' => 'form-control input-focus-effect ',
				'id' => 'password',
				'placeholder' => ' ', // Ajoutez un espace pour le label flottant
				'required' => true,
			])
			->addLabel('password', 'Mot de passe', [
				'class' => 'form-label fw-bold required',
			])
			->endDiv()
			->startDiv(['class' => 'row mb-4'])
			->startDiv(['class' => 'col-sm-6 d-flex justify-content-start'])
			->addLink('Mot de passe oublié ?', '/password-forgotten', [
				'class' => 'link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover',
			])
			->endDiv()
			->startDiv(['class' => 'col-sm-6 d-flex justify-content-end'])
			->addLink('Inscription', '/register', [
				'class' => 'link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover',
			])
			->endDiv()
			->endDiv()
			->addButton('Se connecter', [
				'class' => 'btn btn-outline-info fw-bold mb-4 d-block w-100',
				'type' => 'submit',
			])
			->endForm()
			->endDiv()
			->endDiv();
	}
}
