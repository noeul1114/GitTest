<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\Comment::create([
          'description' => '댓글을테스트하는중이죠',
          'vote' => 44,
          'up' => 28,
          'down' => 6,
          'neutral' => 10
      ]);

      App\Comment::create([
          'description' => '댓글을테스트하는중이죠2',
          'vote' => 33,
          'up' => 20,
          'down' => 3,
          'neutral' => 10
      ]);
    }
}
