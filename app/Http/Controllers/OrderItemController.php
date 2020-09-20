<?php

namespace App\Http\Controllers;

use App\Services\OrderItemService;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    protected $orderItem;

    public function __construct(OrderItemService $orderItem)
    {
        $this->orderItem = $orderItem;
    }

    public function show($id)
    {
        return $this->orderItem->find($id);
    }
}