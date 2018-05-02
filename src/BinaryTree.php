<?php

class BinaryTree
{
    /**
     * @var $value mixed
     */
    public $value;
    /**
     * @var $leftChild BinaryTree
     */
    public $leftChild;
    /**
     * @var $rightChild BinaryTree
     */
    public $rightChild;


    public function __construct($value)
    {
        $this->value = $value;
        $this->leftChild = null;
        $this->rightChild = null;
    }


    public function insertLeftChild($value)
    {
        if ($this->leftChild == null) {
            $this->leftChild = new BinaryTree($value);
        } else {
            $newNode = new BinaryTree($value);
            $newNode->leftChild = $this->leftChild;
            $this->leftChild = $newNode;
        }
    }


    public function insertRightChild($value)
    {
        if ($this->rightChild == null) {
            $this->rightChild = new BinaryTree($value);
        } else {
            $newNode = new BinaryTree($value);
            $newNode->rightChild = $this->rightChild;
            $this->rightChild = $newNode;
        }
    }


    public function preOrderDFSTraverse(){
        echo ($this->value ?? 'null') . PHP_EOL;

        if ($this->leftChild){
            $this->leftChild->preOrderDFSTraverse();
        }

        if ($this->rightChild){
            $this->rightChild->preOrderDFSTraverse();
        }
    }

    public function inOrderDFSTraverse(){
        if ($this->leftChild){
            $this->leftChild->inOrderDFSTraverse();
        }

        echo ($this->value ?? 'null') . PHP_EOL;

        if ($this->rightChild){
            $this->rightChild->inOrderDFSTraverse();
        }
    }

    public function postOrderDFSTraverse(){
        if ($this->leftChild){
            $this->leftChild->postOrderDFSTraverse();
        }

        if ($this->rightChild){
            $this->rightChild->postOrderDFSTraverse();
        }

        echo ($this->value ?? 'null') . PHP_EOL;
    }

}