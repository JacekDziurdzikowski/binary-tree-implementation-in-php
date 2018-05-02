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


}