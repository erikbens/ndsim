<?php
/* @var $this \Plinth\Response\Response */

$request = $this->Main()->getRequest();
$validator = $this->Main()->getValidator();

if ($validator->isValid() && !$request->hasErrors() && isset($data)) {
	header(\Plinth\Response\Response::CODE_201);
	
	print json_encode($data);
} else {
	print json_encode(["errors" => $request->getErrors()]);
}