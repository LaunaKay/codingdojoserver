<?php

class SinglyLinkedList
{
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = new Node(4);
        $this->head->next = NULL;
        $this->tail = NULL;
    }


    public function addLast($value)
    {
        $newNode = new Node($value);
        $current = $this->head;
        $current->next = new Node($value);

        if ($this->tail == NULL)
        {
            $this->tail = $newNode;
        }
        else
        {
            for (while($current->next != NULL)
                $current = $current->next;
        }
        $current->next = $value;
    }

    public function deleteNode($head, $value)
    {
        $current = $this->head;
        while($current->value != $value)
            $current = $current->next;
        $temp = $current;
        $current->next = $current->next->next;
        $temp = NULL;
    }


    public function insertNode($head, $value, $valueAfter)
    {
        $current = $this->head;
        while($current->next->value != $valueAfter)
        {
            $current=$current->next;
        }
        $temp = $current->next;
        $current->next = $value;
        $value->next = $temp;
    }


    public function loopList($head)
    {
        $current = $this->head;

        while($current->next->value != NULL)
        {
                if ($current->value > $current->next->value)
                {
                    $counter++;
                    $temp = $current->value;
                    $current->value = $current->next->value;
                    $current->next->value = $temp;
                }
                $current=$current->next;
        }
        if (counter == 0)
        {
            return;
        }
        else
        {
            $counter = 0;
            loopList($head);
        }
    }

    public function isPresent($value)
    {
        if ($current->value = $value)
            return TRUE;
        else
        {
        while($current->next->value != NULL)
            if ($current->value == $value)
                return TRUE;
        }
    }
}



class Node
{
    public $value;
    public $next;

    function __construct($value)
    {
        $this->value = $value;
    }
}
$FirstList = new SinglyLinkedList();
$FirstList->addLast(10);
$FirstList->addLast(3);
$FirstList->addLast(20);
$FirstList->addLast(2);
$FirstList->addLast(1);
echo "<pre>";
var_dump($FirstList);
// var_dump($FirstList->head);
