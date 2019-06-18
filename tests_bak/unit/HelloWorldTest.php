<?php
use App\Controller\A;
class HelloWorldTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
//    public function testSomeFeature()
//    {
////        $this->assertTrue(2 == 2, 'test');
////        codecept_debug(123);
////    $arr = [];
////    $this->assertEquals(5, count($arr), 'ttt');
//        $a = new A();
//        $this->assertGreaterThan(0, $a->getXX(), 'getXX的值居然不大于0!');
//    }
    public function testM1(){
        $this->assertTrue(true);	//传的参数不是true，断言失败
    }

    /**
     * @depends testM1
     */
    public function testM2(){
        $isOK = true;
        $this->assertTrue($isOK);	//你换汤不换药咋行？不还是传了个false进去？失败！
    }
//
//    public function testM3(){
//        $isOK = time() < 0;	//呵呵，当前时间戳肯定不小于0，不成立，于是这个比较运算得到结果是false
//        $this->assertTrue($isOK);	//你又换汤不换药了亲！
//    }
//
//    public function testM4(){
//        $this->assertTrue(time() < 0);	//后果你懂的
//    }
//
//    public function testM5(){
//        $this->assertTrue(time() > 0);	//好，恭喜你这次成功了！
//        $this->assertTrue(false);	//又失败了
//    }
//    public function testMe(){
//        $this->assertTrue(1 + 2 == 3);	//第1次断言，等式成立，断言成功，继续往下运行
////        file_put_contents('E:\1.txt', 11);	//不信你看看，这个文件存在喔，说明这里被运行了
//        echo 111;
//        $this->assertTrue(1 + 2 == 4);	//第2次断言，等式不成立，断言失败，下一句将无法运行，运行到这里就会退出这个测试方法，如果有其它测试方法就会再运行另一个测试方法
////        file_put_contents('E:\2.txt', 22);	//为了证明不会运行到这里，特设此代码，让你去找找2.txt是否真的不会被创建
//        echo 222;
//        $this->assertTrue(2 + 2 == 4);	//第3次断言，等式成立，但上一句已经断言失败，这里不会被运行
//
//        //最终你就是能看到运行结果提示只运行了2次断言，1次成功1次失败，没有提到第3次断言，因为这个测试方法在第二句断言时就中断了，你也看不到 E:\2.txt 文件的存在
//    }


}