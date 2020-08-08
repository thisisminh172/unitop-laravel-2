<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    //
    public function add()
    {

        // DB::table('posts')->insert(
        //     ['title' => 'post 3', 'content' => 'content 3', 'user_id' => 3]
        // );
        ########
        // $post = new Post;
        // $post->title = "laravel pro 1";
        // $post->content = "Content laravel pro 1";
        // $post->user_id = 2;
        // $post->votes = 20;
        // $post->save();
        ###########
        // Post::create([
        //     'title' => 'Create 4',
        //     'content' => 'Content create 4',
        //     'user_id' => 3,
        //     'votes' => 130
        // ]);

        ############FORM
        return view('post.create');

    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'content' => 'required'
            ],
            [
                'required' => ':attribute không được để trống'
            ],
            [
                'title' => 'Tiêu đề',
                'content' => 'Nội dung'
            ]
        );

        $input = $request->all();

        if ($request->hasFile('file')) {
            $file = $request->file;
            //lấy tên file
            $fileName = $file->getClientOriginalName();
            //lấy đuôi file
            echo $file->getClientOriginalExtension();

            //lấy kích thước
            echo $file->getSize();

            $path = $file->move('public/uploads', $file->getClientOriginalName());
            $thumbnail = 'public/uploads/' . $fileName;
            $input['thumbnail'] = $thumbnail;
        }

        $input['user_id'] = 2;

        Post::create($input);

        ##########
        return redirect('post/show')->with('status', 'Thêm bài viết thành công!');
        ########
        // return redirect()->route('post.show');
    }

    public function show()
    {
        // return redirect()->away('http://unitop.vn');

        // $posts = DB::table('posts')->get();
        // foreach($posts as $post){
        //     echo $post->title;
        //     echo $post->content;
        //     echo "<br>";
        // }
        // return $posts;
        // $posts = DB::table('posts')->select('title','content')->first();
        // $posts = DB::table('posts')->find(3);
        // echo $posts->title;
        // print_r($posts) ;
        // $number_posts = DB::table('posts')->where('user_id',3)->count();
        // $posts = DB::table('posts')->avg('id');
        // echo $posts;
        // $posts = DB::table('posts')
        // ->join('users','users.id','=','posts.user_id')
        // ->select('users.name','posts.title')
        // ->get();
        // echo "<pre>";
        // print_r($posts);
        // $posts = DB::table('posts')
        //     ->where('user_id', 3)
        //     ->get();
        // $posts = DB::table('posts')
        //     ->where('user_id', '>', 1)
        //     ->get();
        ################
        // $posts = DB::table('posts')
        //     ->where('title', 'Like', '%Post%')
        //     ->get();
        // echo "<pre>";
        // print_r($posts);
        ###################
        // $posts = DB::table('posts')->where([
        //     ['title','like','%post%'],
        //     ['votes','>',60]
        // ])->get();
        ##########
        // $posts = DB::table('posts')
        // ->where('votes','<',20)
        // ->orWhere('user_id',1)
        // ->get();
        ############
        // $posts = DB::table('posts')
        // ->selectRaw('count(id) as number_posts , user_id')
        // ->groupBy('user_id')
        // ->orderBy('number_posts')
        // ->get();
        ###########
        // $posts = DB::table('posts')
        // ->orderBy('votes','desc')
        // ->get();
        #########
        // $posts = DB::table('posts')
        //     ->limit(2)
        //     ->get();
        // echo "<pre>";
        // print_r($posts);
        ##########
        // $posts = Post::where('id', 5)->get();
        // echo "<pre>";
        ##########
        // $posts = Post::all();
        // print_r($posts);

        #######Phân trang
        //query builder
        // $posts = DB::table('posts')->paginate(4);

        //ORM
        // $posts= Post::simplePaginate(5);

        $posts= Post::where('id','>',15)->orderBy('id','desc')->paginate(5);

        // $posts->withPath('demo/show');

        return view('post.index', compact('posts'));

    }

    public function update($id)
    {
        // DB::table('posts')
        //     ->where('id', $id)
        //     ->update([
        //         'title' => 'Macbook 2019',
        //         'votes' => 300
        //     ]);
        ###########eloquent orm
        // $post = Post::find($id);
        // $post->title = "laravel pro 2";
        // $post->content = "Content laravel pro 2";
        // $post->user_id = 2;
        // $post->votes = 2000;
        // $post->save();
        #########
        $post = Post::where('id', $id)
            ->update([
                'title' => 'Update',
                'content' => 'Content update',
                'user_id' => 3,
                'votes' => 305
            ]);

    }

    public function delete($id)
    {
        // return DB::table('posts')
        //     ->where('id', $id)
        //     ->delete();
        ########
        // $post = Post::find($id);
        // $post->delete();
        ########
        // Post::where('id', 6)->delete();
        #########
        // Post::destroy($id);
        #########
        // Post::destroy([10,11]);
        #########
        $post = Post::find($id);
        $post->delete();
    }

    public function read()
    {
        ######
        // $posts = Post::all();
        ######
        // $posts = Post::where('user_id',1)->get();
        ########
        // $post = Post::where('user_id','3')->first();
        #######
        // $post = Post::find([1,5]);
        ########
        // $posts = Post::orderBy('votes','desc')->get();
        ######
        // $posts = Post::selectRaw("count('id') as number_posts , user_id")
        // ->groupBy('user_id')
        // ->orderBy('number_posts','desc')
        // ->get();
        ######
        // $posts = Post::limit(2)->offset(1)->get();
        ###### lấy dữ liệu đã xóa tạm thời
        // $posts = Post::withTrashed()
        // ->get();
        ########
        // $posts = Post::onlyTrashed()
        // ->get();
        #######
        // $img = Post::find(15)
        // ->FeaturedImages;
        // return $img;
        // $user = Post::find(17)
        // ->user;
        // return $user;
        $posts = User::find(3)
            ->posts;
        return $posts;
    }

    public function restore($id)
    {
        $post = Post::onlyTrashed()
            ->where('id', $id)
            ->restore();
    }

    public function permanentlyDelete($id)
    {
        Post::onlyTrashed()
            ->where('id', $id)
            ->forceDelete();
    }

}
