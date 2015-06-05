<?php

class DoublyLinkedList
{
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = NULL;
        $this->tail = NULL;
    }


    public function addLast($data)
    {
        $newNode = new Node($data);
        if ($this->head == NULL)
        {
            $this->head = $newNode;
            $this->tail = $newNode;
        }
        else
        {
            $this->tail->next = $newNode;
            $newNode->previous = $this->tail;
            $this->tail = $newNode;
        }

    }

    public function deleteLastNode()
    {
        if ($this->head == NULL)
            {
                $this->head = NULL;
            }
        else
        {
            $buffer = $this->tail->previous;
            $this->tail = NULL;
            $this->tail = $buffer;
            $this->tail->next = NULL;
            $this->tail->previous = $this->tail->previous;
        }
    }


    public function insertNode($key, $data)
    {
        $current = $this->head;
        for ($i=0;$i<$key;$i++)
        {
            $current=$current->next;
        }
        $newNode = new Node($data);
        $first = $current;
        $last = $current->next;
        $newNode->next = $last;
        $newNode->previous = $first;
        $first->next = $newNode;
        $last->previous = $newNode;
    }
}


class Node
{
    public $data;
    public $next;
    public $previous;

    function __construct($data)
    {
        $this->data = $data;
    }
}

// $FirstList = new DoublyLinkedList();
// $FirstList->addLast(1);
// $FirstList->addLast(2);
// $FirstList->addLast(3);
// $FirstList->addLast(4);
// $FirstList->addLast(5);
// $FirstList->insertNode(2,6);
// $FirstList->deleteLastNode();
// echo "<pre>";
// var_dump($FirstList);
// // var_dump($FirstList->head);


