<?php 

namespace App\Http\Controllers\User;

use App\Actions\Otp\SendOtpAction;
use App\Enums\OTPType;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChackOtpRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Support\Services\Otp\OtpService;
use App\Support\Traits\Api\ApiResponseTrait;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

   
}