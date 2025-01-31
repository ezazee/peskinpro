<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    // List Stock
    public function listStockIndex()
    {
        $user = Auth::user();
        return view('backend.pages.inventory.list-stock.index', compact('user'));
    }

    public function listStockCreate()
    {
        $user = Auth::user();
        return view('backend.pages.inventory.list-stock.create', compact('user'));
    }

    public function listStockEdit()
    {
        $user = Auth::user();
        return view('backend.pages.inventory.list-stock.edit', compact('user'));
    }


    // EXP Product
    public function expProductIndex()
    {
        $user = Auth::user();
        return view('backend.pages.inventory.exp-product.index', compact('user'));
    }


    // Add Category Stock
    public function addCategoryIndex()
    {
        $user = Auth::user();
        return view('backend.pages.inventory.add-category.index', compact('user'));
    }

    //Transaction History
    public function transactionHistoryIndex()
    {
        $user = Auth::user();
        return view('backend.pages.inventory.transcation-history.index', compact('user'));
    }

    public function transactionHistoryDetail()
    {
        $user = Auth::user();
        return view('backend.pages.inventory.transcation-history.detail', compact('user'));
    }

    public function transactionHistoryCreate()
    {
        $user = Auth::user();
        return view('backend.pages.inventory.transcation-history.create', compact('user'));
    }


    // Detail Supplier
    public function detailSupplierIndex()
    {
        $user = Auth::user();
        return view('backend.pages.inventory.detail-supplier.index', compact('user'));
    }
}
