<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // {
    //     // Fetch all categories
    //     $categories = Category::all()->toArray(); // Convert to array for easier sorting
    //     // Merge Sort function
    //     function mergeSort($array) {
    //         if (count($array) <= 1) {
    //             return $array;
    //         }
    //         $middle = floor(count($array) / 2);
    //         // Recursively split and sort
    //         $left = mergeSort(array_slice($array, 0, $middle));
    //         $right = mergeSort(array_slice($array, $middle));
    //         return merge($left, $right);
    //     }
    
    //     // Merge function to combine two sorted arrays
    //     function merge($left, $right) {
    //         $result = [];
    //         while (count($left) > 0 && count($right) > 0) {
    //             if ($left[0]['priority'] <= $right[0]['priority']) {
    //                 $result[] = array_shift($left);
    //             } else {
    //                 $result[] = array_shift($right);
    //             }
    //         }
    //         // Append remaining items
    //         return array_merge($result, $left, $right);
    //     }
    //     // Sort categories by 'priority' field
    //     $sortedCategories = mergeSort($categories);
    //     // Convert back to a collection (if necessary for Laravel functionality)
    //     $categories = collect($sortedCategories);
    //     // Pass sorted categories to the view
    //     return view('category.index', compact('categories'));
    // }
    
}


