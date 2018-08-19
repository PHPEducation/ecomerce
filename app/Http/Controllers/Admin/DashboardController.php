<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Eloquents\OrderRepository;
use App\Repositories\Eloquents\PostRepository;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Eloquents\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected $orderRepository;
    protected $postRepository;
    protected $productRepository;
    protected $userRepository;

    public function __construct(OrderRepository $orderRepository, PostRepository $postRepository, ProductRepository $productRepository, UserRepository $userRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->postRepository = $postRepository;
        $this->productRepository = $productRepository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $count_user = $this->userRepository->all()->count();
        $count_order = $this->orderRepository->all()->count();
        $count_post = $this->postRepository->all()->count();
        $count_product = $this->productRepository->all()->count();
        $orders = $this->orderRepository->orderBy('created_at', 'desc')->take(config('app.take_order_dashboard'))->get();

        return view('admin.dashboard.dashboard', compact('count_order', 'count_user', 'orders', 'count_post', 'count_product'));
    }
}
