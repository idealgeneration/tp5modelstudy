<?php
namespace app\index\controller;

use think\Db;
use app\index\model\User;
use think\Loader;
class Index
{
    public function index()
    {
        // dump(config('database'));
    #------数据库的连接------
        //1.使用默认配置
    	// $res=Db::connect();
    	//2.使用数组配置
    	// $res=Db::connect([
     //    'type'            => 'mysql',
     //    'dsn'             => '',
     //    'hostname'        => '127.0.0.1',
     //    'database'        => 'course',
     //    'username'        => 'root',
     //    'password'        => '2',
     //    'hostport'        => '3306',
     //    'params'          => [],
     //    'charset'         => 'utf8'
    	// ]);
    	//3.使用字符串配置，配置格式--》  协议名称：//用户名：密码@ip：端口/数据库名#编码格式
    	// $res=Db::connect('mysql://root:3@127.0.0.1:3306/course#utf8');
    	//4.使用配置名称
    	// $res=Db::connect('dbconfig1');

    	// select 
    	// $res=Db::query('select * from user');
    	//insert
    	// $res=Db::execute('insert user(username,password,email)values(?,?,?)',["lisi",md5('lisi'),'lisi@qq.com']);

    # ------查询------
    	//select 返回二维数组
    	//没有数据时返回空数组
    	// $res=Db::table('user')->where(['id'=>10])->select();
    	//column返回一维数组
    	//没有数据时返回空数组
    	// $res=Db::table('user')->column('username');
    	//find返回一维数组，一条数据
    	//没有数据时返回null
    	// $res=Db::table('user')->where(['id'=>10])->find();
    	//value返回一条数据
    	//没有数据时返回null
    	// $res=Db::table('user')->where(["id"=>10])->value('username');

    	//name,不需要带表前缀；table需要带前缀
    	// $res=Db::name('user')->select();

    	//助手函数
    	// $res=db('user')->select();
    	// $res=db('user')->column('username');
    	// $res=db('user')->find();
    	// $res=db('user')->value('username');


    	#------插入------
    	// $db=Db::name('user');
    	// $db=db('user');

    	#insert 返回值是插入成功的条数
    	#insertGetId 返回值是插入条目对应的id
    	#insertAll 返回值是插入成功的条目

    	// $res=$db->insert(['username'=>'lixiang','password'=>md5('lixiang'),'email'=>'lixiang@qq.com']);
    	// $res=$db->insertGetId(['username'=>'lixiang','password'=>md5('lixiang'),'email'=>'lixiang@qq.com']);
    	// $data=[];
    	// for($i=10;$i<20;$i++){
    	// 	$data[]=['username'=>'lixiang'.$i,'password'=>md5('lixiang'),'email'=>'lixiang'.$i.'@qq.com'];

    	// }
    	// $res=$db->insertAll($data);

    	#------更新------
    	// $db=Db::name('user');
    	#update 返回影响的行数
    	// $res=$db->where(['id'=>4])->update(['username'=>"lixiangupdate"]);
    	#setField 返回影响的行数
    	// $res=$db->where(['id'=>5])->setField(['username'=>'lixiangupdate']);
    	#setInc 自增
    	// $res=$db->where(["id"=>5])->setInc('num',5);
    	#setDec 自减
    	// $res=$db->where(["id"=>5])->setDec('num',2);

    	#------删除------
    	// $db=Db::name('user');
    	// $res=$db->delete(4);
    	// $res=$db->where(['id'=>5])->delete();

    	#------条件------
    	// $db=Db::name('user');
    	#where条件建议使用三个参数（字段名，判断，值）
    	#判断的值：
    	#eq =
    	#neq <>
    	#lt <
    	#elt <=
    	#gt >
    	#egt >=
    	#in not in
    	#between not between

    	// $res=$db->where('id','>',5)->buildSql();
    	//or
    	// $res=$db->where('id','>',5)->whereOr('username','=','lixiang7')->buildSql();

    	#------链式------
    	// $db=db('user');
    	// $res=$db->where('id','>',10)
    	// ->field('username,password,num')  //查询的字段
    	// // ->order('id DESC')
    	// // ->limit(0,5)
    	// ->page(2,5)
    	// ->select();

    	#------新建model------
    	//1.直接用类调用,建议使用第一种方式
    	// $res=User::get(30);
    	//2.new对象
    	// $user=new User;
    	// $res=$user::get(31);
    	//3.Loader::model()
    	// $user=Loader::model("User");
    	// $res=$user::get(30);
    	//4.助手函数model()
    	// $user=model('User');
    	// $res=$user::get(31);

    	// $res=$res->toArray();

    	// $res=User::All();
    	// foreach($res as $val){
    	// 	dump($val->toArray());
    	// }

    	// $res=User::get(25);
    	// $res=User::column('username');
    	// foreach ($res as $val) {
    	// 	dump($val);
    	// }
    	// $res=User::value('username');
    	// dump($res);

    	// $res=User::create(['username'=>'lixiang','password'=>md5('lixang'),'email'=>'258476@qq.com','num'=>22]);
    	// dump($res->toArray());

    	// $res=User::destroy(25);
    	// dump($res);

    	// $res=User::destroy(['username'=>'lixiang2']);
    	// dump($res);

    	// $res=User::update(['username'=>'lixiang'],['id'=>28]);
    	// dump($res);



    	// dump($res->toArray());



    	
    }
}
