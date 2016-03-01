<?php

use Illuminate\Database\Seeder;

class BoardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\Board::create([
          'headline' => '세이프로젝트가 존나 재밌다 없다?',
          'description' => '하면서 정말 많은걸 느껴요오오오오오오아르아재ㅑㅜㅐ매',
          'writer' => 'willypower',
          'vote_id' => 10,
          'vote_nonid' => 4,
          'revive_vote' => 0,
          'up' => 9,
          'down' => 3,
          'neutral' => 2,
          'sort' => 'hobby',
          'sort_board' => 'a'
      ]);

      App\Board::create([
          'headline' => '광운대를 좋아하시나용ㅇㅇㅇ',
          'description' => '서울시 성북구 광운대역근처 맛집은 맛있져',
          'writer' => 'willypower',
          'vote_id' => 18,
          'vote_nonid' => 7,
          'revive_vote' => 0,
          'up' => 10,
          'down' => 7,
          'neutral' => 8,
          'sort' => 'sports',
          'sort_board' => 'a'
      ]);

      App\Board::create([
          'headline' => '뭐하자는건지 모르겠다',
          'description' => '그렇지요? 저도 잘 모르겠어요',
          'writer' => 'willypower',
          'vote_id' => 4,
          'vote_nonid' => 1,
          'revive_vote' => 0,
          'up' => 2,
          'down' => 2,
          'neutral' => 1,
          'sort' => 'social',
          'sort_board' => 'a'
      ]);
    }
}
