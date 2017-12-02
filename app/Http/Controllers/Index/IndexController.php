<?php namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class IndexController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		
		
		//return view('index');
	}
	public function bbb()
	{
		echo '777';
		
		echo $a = $this->isMobile();
		
		//return view('index');
	}
	public function aa(Request $request)
	{
		$aaaa = $request->a;
		
		echo $aaaa;
		//return view('index');
	}
	
	
	public function aaa(Request $request,$id)
	{
		//$aaaa = $request->a;
		
		//$aaaa = $request->id;
		
		echo $id;
		//return view('index');
	}
	
	
	/**
	 * 判断当前访问的用户是  PC端  还是 手机端  返回true 为手机端  false 为PC 端
	 * @return boolean
	 */
	/**
	 　　* 是否移动端访问访问
	 　　* @return bool
	*/
	
	public function isMobile()
	{
		// 如果有HTTP_X_WAP_PROFILE则一定是移动设备
		if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
			return true;
			
			// 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
			if (isset ($_SERVER['HTTP_VIA']))
			{
				// 找不到为flase,否则为true
				return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
			}
			// 脑残法，判断手机发送的客户端标志,兼容性有待提高
			if (isset ($_SERVER['HTTP_USER_AGENT']))
			{
				$clientkeywords = array ('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile');
				// 从HTTP_USER_AGENT中查找手机浏览器的关键字
				if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
					return true;
			}
			// 协议法，因为有可能不准确，放到最后判断
			if (isset ($_SERVER['HTTP_ACCEPT']))
			{
				// 如果只支持wml并且不支持html那一定是移动设备
				// 如果支持wml和html但是wml在html之前则是移动设备
				if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
				{
					return true;
				}
			}
			return false;
	}
	
	function is_weixin() {
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
			return true;
		} return false;
	}
}
