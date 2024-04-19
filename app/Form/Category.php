<?php

namespace App\Form;

use App\Core\Form;
use App\Models\Category;

class CategoryForm extends Form
{
	public function __construct(string $action, ?Category $category = null)
	{
		$this
			->startForm($action, 'POST', [
				'class' => 'card p-3 w-75 mx-auto',
			])
			->startDiv(['class' => 'mb-3'])
			->addLabel('title', 'Titre', ['class' => 'form-label'])
			->addInput('text', 'title', [
				'class' => 'form-control',
				'id' => 'title',
				'placeholder' => 'Entrer une catégorie',
				'value' => $category ? $category->getTitle() : null,
			])
			->endDiv();
		$this->startDiv(['class' => 'mb-3 form-check'])
			->addInput('checkbox', 'enable', [
				'class' => 'form-check-input',
				'checked' => $category ? (bool) $category->getEnable() : null,
				'id' => 'enable'
			])
			->addLabel('enable', 'Actif', ['class' => 'form-check-label'])
			->endDiv()
			->addButton($category ? 'Modifier' : 'Créer', [
				'class' => 'btn btn-primary'
			])
			->endForm();
	}
}
