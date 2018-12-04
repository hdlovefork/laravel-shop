<?php

namespace App\Http\Controllers;

use App\Exceptions\CouponCodeUnavailableException;
use App\Http\Requests\Request;
use App\Models\CouponCode;

class CouponCodesController extends Controller
{
    public function show(Request $request,$code)
    {
        // 判断优惠券是否存在
        if (!$record = CouponCode::where('code', $code)->first()) {
            throw new CouponCodeUnavailableException('优惠券不存在');
        }

        $record->checkAvailable($request->user());
        return $record;
    }
}
