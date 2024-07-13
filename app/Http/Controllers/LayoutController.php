<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function layout(){
        return view('template1');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');

    }

    public function contact(){
        return view('contact');

    }

    public function blog(){
        $blogs = [
            [
                'title' => 'Title One',
                'body' => ' Ut quibusdam, quisquam odit molestias qui suscipit maiores quam saepe aut aperiam error esse culpa reiciendis earum rerum, ipsa sed nobis eum accusantium quia maxime sequi. Commodi quis autem aut.
            Impedit dolor, fugit velit perferendis praesentium in alias quas similique quidem inventore aliquid, ratione soluta sint? Similique temporibus necessitatibus cupiditate voluptas accusantium commodi error voluptatibus. Qui officia eveniet fugiat placeat.
            Quod laborum fuga nobis, voluptatibus molestiae nostrum aut doloremque rem ipsum similique obcaecati porro est mollitia ad a facere. Harum quas, omnis ipsa quae corporis pariatur eos repudiandae quam quibusdam.
            Nemo quidem quisquam labore voluptates veniam temporibus rem natus maxime repellat, voluptatem id sint maiores ipsa nisi tenetur inventore doloribus iste nobis recusandae velit alias. Magni omnis tempora veniam earum?'
            ],
            [
                'title' => 'Title Two',
                'body'  => ' Ut quibusdam, quisquam odit molestias qui suscipit maiores quam saepe aut aperiam error esse culpa reiciendis earum rerum, ipsa sed nobis eum accusantium quia maxime sequi. Commodi quis autem aut.
            Impedit dolor, fugit velit perferendis praesentium in alias quas similique quidem inventore aliquid, ratione soluta sint? Similique temporibus necessitatibus cupiditate voluptas accusantium commodi error voluptatibus. Qui officia eveniet fugiat placeat.
            Quod laborum fuga nobis, voluptatibus molestiae nostrum aut doloremque rem ipsum similique obcaecati porro est mollitia ad a facere. Harum quas, omnis ipsa quae corporis pariatur eos repudiandae quam quibusdam.
            Nemo quidem quisquam labore voluptates veniam temporibus rem natus maxime repellat, voluptatem id sint maiores ipsa nisi tenetur inventore doloribus iste nobis recusandae velit alias. Magni omnis tempora veniam earum?'
            ],
            [
                'title' => 'Title Three',
                'body' => ' Ut quibusdam, quisquam odit molestias qui suscipit maiores quam saepe aut aperiam error esse culpa reiciendis earum rerum, ipsa sed nobis eum accusantium quia maxime sequi. Commodi quis autem aut.
            Impedit dolor, fugit velit perferendis praesentium in alias quas similique quidem inventore aliquid, ratione soluta sint? Similique temporibus necessitatibus cupiditate voluptas accusantium commodi error voluptatibus. Qui officia eveniet fugiat placeat.
            Quod laborum fuga nobis, voluptatibus molestiae nostrum aut doloremque rem ipsum similique obcaecati porro est mollitia ad a facere. Harum quas, omnis ipsa quae corporis pariatur eos repudiandae quam quibusdam.
            Nemo quidem quisquam labore voluptates veniam temporibus rem natus maxime repellat, voluptatem id sint maiores ipsa nisi tenetur inventore doloribus iste nobis recusandae velit alias. Magni omnis tempora veniam earum?'
            ],
            [
                'title' => 'Title Four',
                'body' => ' Ut quibusdam, quisquam odit molestias qui suscipit maiores quam saepe aut aperiam error esse culpa reiciendis earum rerum, ipsa sed nobis eum accusantium quia maxime sequi. Commodi quis autem aut.
            Impedit dolor, fugit velit perferendis praesentium in alias quas similique quidem inventore aliquid, ratione soluta sint? Similique temporibus necessitatibus cupiditate voluptas accusantium commodi error voluptatibus. Qui officia eveniet fugiat placeat.
            Quod laborum fuga nobis, voluptatibus molestiae nostrum aut doloremque rem ipsum similique obcaecati porro est mollitia ad a facere. Harum quas, omnis ipsa quae corporis pariatur eos repudiandae quam quibusdam.
            Nemo quidem quisquam labore voluptates veniam temporibus rem natus maxime repellat, voluptatem id sint maiores ipsa nisi tenetur inventore doloribus iste nobis recusandae velit alias. Magni omnis tempora veniam earum?'
            ],
            [
                'title' => 'Title Five',
                'body' => ' Ut quibusdam, quisquam odit molestias qui suscipit maiores quam saepe aut aperiam error esse culpa reiciendis earum rerum, ipsa sed nobis eum accusantium quia maxime sequi. Commodi quis autem aut.
            Impedit dolor, fugit velit perferendis praesentium in alias quas similique quidem inventore aliquid, ratione soluta sint? Similique temporibus necessitatibus cupiditate voluptas accusantium commodi error voluptatibus. Qui officia eveniet fugiat placeat.
            Quod laborum fuga nobis, voluptatibus molestiae nostrum aut doloremque rem ipsum similique obcaecati porro est mollitia ad a facere. Harum quas, omnis ipsa quae corporis pariatur eos repudiandae quam quibusdam.
            Nemo quidem quisquam labore voluptates veniam temporibus rem natus maxime repellat, voluptatem id sint maiores ipsa nisi tenetur inventore doloribus iste nobis recusandae velit alias. Magni omnis tempora veniam earum?'
            ],
            [
                'title' => 'Title Six',
                'body' => ' Ut quibusdam, quisquam odit molestias qui suscipit maiores quam saepe aut aperiam error esse culpa reiciendis earum rerum, ipsa sed nobis eum accusantium quia maxime sequi. Commodi quis autem aut.
            Impedit dolor, fugit velit perferendis praesentium in alias quas similique quidem inventore aliquid, ratione soluta sint? Similique temporibus necessitatibus cupiditate voluptas accusantium commodi error voluptatibus. Qui officia eveniet fugiat placeat.
            Quod laborum fuga nobis, voluptatibus molestiae nostrum aut doloremque rem ipsum similique obcaecati porro est mollitia ad a facere. Harum quas, omnis ipsa quae corporis pariatur eos repudiandae quam quibusdam.
            Nemo quidem quisquam labore voluptates veniam temporibus rem natus maxime repellat, voluptatem id sint maiores ipsa nisi tenetur inventore doloribus iste nobis recusandae velit alias. Magni omnis tempora veniam earum?'
            ]

        ];
        return view('blog',compact('blogs'));
    }

}
