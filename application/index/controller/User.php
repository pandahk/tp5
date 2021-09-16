<?php

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\db\Raw;
use think\db\Where;
use think\Request;


class User  extends  Controller
{
//数据库
    function  lst(){
// ['id','>',5]
        //$user=Db::name('user')->where('id',1)->find();
        //echo $user['name'];
//        $user=Db::name('user')->where('id','>',5)->find();
//        echo $user['sex'].'-'.$user['name'].'-'.$user['age'];
//助手函数
//        $user=db('user')->where('id','>',5)->find();
//        echo $user['sex'].'-'.$user['name'].'-'.$user['age'];
//select 返回一个数组    find返回一条数据
       /* $user=db('user')->where([
            ['id','>',6],
            ['name','=','赵云']
        ])->select();
        foreach ($user as $u){
            echo $u['id'].'-'.$u['name'].'-'.$u['age'];
            echo '<br>';
        }*/
        //find
/*$user=db('user')->where('id',6)->find();
echo $user['id'].'-'.$user['name'].'-'.$user['age'];*/

       /* $array=db('user')->where('id','>',6)->column('name','age');

        foreach ($array as $k=>$v){
            echo $k.'-'.$v;
        }*/

        //数据分批处理 处理大量数据库
       /* db('user')->where('id','>',2)->chunk(3,function ($users){
            foreach ($users as $user){
                echo $user['id'].'-'.$user['name'];
                echo '<br>';
                if ($user['id']==6)
                    return false;
            }
        });*/
        //大批量数据处理 游标
       /* $users=db('user')->where('id','>',1)->cursor();
        foreach ($users as $user){
            echo $user['name'];
            echo '<br>';
        }*/
//field
/*$users=db('user')->field('name as mingcheng,age')->select();
foreach ($users as $user){
    echo '-'.$user['mingcheng'].'-'.$user['age'];
    echo '<br>';
}*/
        //函数
//        $count=db('user')->where('sex',1)->count('id');
//echo $count;
//        $age=db('user')->avg('age');
//        Db::table('think_user')
//            ->where([
//                ['name', 'like', $name . '%'],
//                ['title', 'like', '%' . $title],
//                ['id', '>', $id],
//                ['status', '=', $status],
//            ])
//            ->select();
//echo $age;

//        $name = [
//            'email'    => 'thinkphp@qq.com',
//            'nickname' => '流年'
//        ];
//        echo json($name);
//        db('user')->where('id',1)->update(['name'=>'pp']);
//        $sql=db('user')->where('id',1)->fetchSql(true)->select();
//echo $sql;
//        echo db('user')->where('id',1)->buildSql();
//
//        Db::table($subQuery . ' a')
//            ->where('a.name', 'like', 'thinkphp')
//            ->order('id', 'desc')
//            ->select();



//        $name=db('user')->where('id',6)->value('name');
//        echo $name;
//        echo $user['id'].'-'.$user['name'].'-'.$user['age'];
//        print_r($user['name']);
//        $this->assign('user',$user);
//        $this->fetch();

// 原生查询
//        $users=Db::query('select * from tp_user where  id=1 ');
//foreach ($users as $user){
//    echo $user['name'];
//    echo  '<br>';
//}

//        $users=Db::query('select * from tp_user where name=:name',['name'=>'pp']);
//foreach ($users as $user){
//    echo $user['name'];
//    echo  '<br>';
//}

//Db::execute('update tp_user set name =:name where id=:id',['name'=>'zs2256','id'=>20]);

//        Db::execute('update tp_user set name =? where id=?',['niuma',20]);


        //模型
//        $u=\app\index\model\User::where('id',1)->find();
//        echo  $u['name'];
//$user=new \app\index\model\User();
//$user->name='飞虎';
//$user->sex=26;   save返回更新条数
//$user->allowField(['name','sex'])->save([
//    'name'=>'飞鸟',
//    'card'=>'123',
//    'age'=>21,
//    'sex'=>2
//]);
//echo $user->id;  //获取自增id

//        $list=[
//            [
//            'name'=>'飞鸟11',
//            'age'=>21,
//            'sex'=>2
//            ],
//            [
//            'name'=>'飞鸟22',
//            'age'=>21,
//            'sex'=>2
//        ],
//            ];
//$user->saveAll($list);

//$user=\app\index\model\User::create([
//    'name'=>'qqq',
//    'age'=>22,
//    'card'=>'123'
//],true);
//echo $user->name;echo '<br>';
//echo $user->id;

        //更新
//$user=\app\index\model\User::where('id',1)->find();
//$user->name='梁朝伟88';
//$user->age=Db::raw('age+8');
//$user->save();

//批量更新数据
//        $user = new User;
//        $list = [
//            ['id'=>1, 'name'=>'thinkphp', 'email'=>'thinkphp@qq.com'],
//            ['id'=>2, 'name'=>'onethink', 'email'=>'onethink@qq.com']
//        ];
//        $user->saveAll($list);
        //更新
//\app\index\model\User::where('id',1)->update([
//    'name'=>'李丹',
//    'age'=>18
//]);
//删除
//        $row=\app\index\model\User::where('id','>',31)->delete();
//echo '删除'.$row.'条';
//写入JSON数据
//$user=new \app\index\model\User;
//$user->id=1;
//$user->name=[
//    'aa'=>'a1',
//    'bb'=>'b1'
//];
//$user->age=21;
//$user->isUpdate(true)->save();



//\app\index\model\User::where('id',39)->update(['name'=>'bbb']);
        //readonly
//        $user=new \app\index\model\User;
//        $user->id=1;
//        $user->name='xxx';
//        $user->age=16;
//        $user->isUpdate(true)->readonly(['name'])->save();
        $user=\app\index\model\User::where('id','>',30)->select();
//echo $user->create_time;
//        echo json_encode($user->toJson());  //json序列化
//        echo '<br>';
//        echo 'lst';
        $this->assign('users',$user);
//        $u=db('user')->where('id',1)->find();
//     echo $u['name'];
//        echo $user->name;
        return $this->fetch();
    }

//函数
    function fun(){
        $time=date('Y-m-d h:i:s');
        echo explode(' ',$time)[0];
        echo '<br>';
        echo explode(' ',$time)[1];

    }

    function  add(){
        //新增单条数据
    $data=['name'=>'zs','age'=>18];
    //db('user')->insert($data);
    //db('user')->data($data)->insert();
        //$userId=db('user')->insertGetId($data);
//    echo $userId;
        $data=[
            ['name'=>'zs','age'=>25],
            ['name'=>'lisi','age'=>27]
        ];
//$count=db('user')->insertAll($data);
//$count=db('user')->data($data)->insertAll();
//echo $count;

// 分批写入 每次最多100条数据   使用limit方法指定每次插入的数量限制
        db('user')->limit(10)->insertAll($data);


     echo 'ok';

    }

function  update(){

//        db('user')->where('id',1)->update(['name'=>'xiaopi','age'=>25]);
    /*db('user')
        ->where('id',1)
        ->dec('age',3)
        ->exp('name','UPPER(name)')
        ->update();*/
//db('user')->where('id',1)->update(['name'=>'关羽']);
   /* db('user')->where('id',1)->update([
        'name'=>Db::raw('UPPER(name)'),
        'age'=>Db::raw('age+5')

    ]);*/




        echo 'update ok!!';


}

function  del(){

//        db('user')->where('id',29)->delete();
//    db('user')->where('id','>',26)->delete();
//    db('user')->where('id','in','21,24')->delete();
    // 无条件删除所有数据
//    db('user')->delete(true);

    echo 'del ok!!';
}
//链式操作
/*Db::table('think_user')
->alias('a')
->join('think_dept b ','b.user_id= a.id')
->select();

Db::table('think_user')->field('id,title,content')->select();
Db::table('think_user')->field('id,nickname as name')->select();


















*/





}