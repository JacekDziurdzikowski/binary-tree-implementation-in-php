<?php

require __DIR__.'/../vendor/autoload.php';

$a_node = new BinaryTree('a');
$a_node->insertLeftChild('b');
$a_node->insertRightChild('c');

$b_node = $a_node->leftChild;
$b_node->insertRightChild('d');

$c_node = $a_node->rightChild;
$c_node->insertLeftChild('e');
$c_node->insertRightChild('f');

$d_node = $b_node->rightChild;
$e_node = $c_node->leftChild;
$f_node = $c_node->rightChild;


echo 'testing_binary_tree_inserstion.php:' . PHP_EOL;
echo ($a_node->value ?? 'null') . PHP_EOL; #a
echo ($b_node->value ?? 'null') . PHP_EOL; #b
echo ($c_node->value ?? 'null') . PHP_EOL; #c
echo ($d_node->value ?? 'null') . PHP_EOL; #d
echo ($e_node->value ?? 'null') . PHP_EOL; #e
echo ($f_node->value ?? 'null') . PHP_EOL; #f
