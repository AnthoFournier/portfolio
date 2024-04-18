<?php

namespace App\Form;

use App\Core\Form;
use App\Models\User;

class UserForm extends Form
{
	public function __construct(string $action, ?User $user = null)
	{
		$this
			->startDiv(['class' => 'container d-flex justify-content-center'])
			->startDiv(['class' => 'my-5 p-4 bg-dark border-bottom border-light', 'style' => 'max-width: 500px; width: 100%;'])
			->startForm($action, 'POST', [
				'id' => 'form-user',
				'formnovalidate' => true,
			])
			->startDiv(['class' => 'form-floating mb-4'])
			->addInput('text', 'firstName', [
				'class' => 'form-control input-focus-effect',
				'id' => 'firstName',
				'placeholder' => ' ',
				'required' => true,
				'value' => $user ? $user->getFirstName() : null,
			])
			->addLabel('firstName', 'Prénom', [
				'class' => 'form-label fw-bold required',
			])
			->endDiv()
			->startDiv(['class' => 'form-floating mb-4'])
			->addInput('text', 'lastName', [
				'class' => 'form-control input-focus-effect',
				'id' => 'lastName',
				'placeholder' => ' ',
				'required' => true,
				'value' => $user ? $user->getLastName() : null,
			])
			->addLabel('lastName', 'Nom', [
				'class' => 'form-label fw-bold required',
			])
			->endDiv()
			->startDiv(['class' => 'form-floating mb-4'])
			->addInput('email', 'email', [
				'class' => 'form-control input-focus-effect',
				'id' => 'email',
				'placeholder' => ' ',
				'required' => true,
				'value' => $user ? $user->getEmail() : null,
			])
			->addLabel('email', 'Email', [
				'class' => 'form-label fw-bold required',
			])
			->endDiv()
			->startDiv(['class' => 'form-floating mb-4'])
			->addInput('password', 'password', [
				'class' => 'form-control input-focus-effect',
				'id' => 'password',
				'placeholder' => ' ',
				'required' => $user ? false : true,
			])
			->addLabel('password', 'Mot de passe', [
				'class' => 'form-label fw-bold required',
			])
			->endDiv()
			->addButton($user ? 'Modifier' : 'S\'inscrire', [
				'class' => 'btn btn-outline-info fw-bold mb-4 d-block w-100',
				'type' => 'submit',
			])
			->endForm()
			->endDiv()
			->endDiv();
	}
}
