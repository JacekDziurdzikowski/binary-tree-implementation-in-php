<?php

require __DIR__.'/../vendor/autoload.php';

$binaryTree = new BinaryTree('a');
echo ($binaryTree->value ?? 'null') . PHP_EOL; #a
echo ($binaryTree->leftChild ?? 'null') . PHP_EOL; #null
echo ($binaryTree->rightChild ?? 'null') . PHP_EOL; #null