<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\Model\Letter;
use App\Model\Second;

class IndexController extends AbstractController
{
    public function createLetter()
    {
        $letter_info = $this->request->input('letter_info', '');
        //如果内容为 Hi 不进行保存
        if (trim(str_replace(["\r\n", "\r", "\n"], "", $letter_info)) == "Hi,") {
            return [
                'code' => '1',
                'data' => ''
            ];
        }
        $letter = new Letter();
        $letter->letter_info = $letter_info;
        $letter->save();

        $second = Second::first();
        $second->seconds = time() + 24 * 60 * 60;
        $second->save();
        return [
            'code' => '1',
            'data' => ''
        ];
    }

    public function getSecond()
    {
        $second = Second::first();
        $second->seconds = $second->seconds - time();
        return [
            'code' => '1',
            'data' => $second,
        ];
    }

    public function getLetter()
    {
        $letter = Letter::inRandomOrder()->first();
        if (is_null($letter)) {
            return [
                'code' => '0',
                'data' => ''
            ];
        }
        $letter->get += 1;
        $letter->save();


        return [
            'code' => '1',
            'data' => $letter
        ];
    }

    public function likeLetter()
    {
        $letter_id = $this->request->input('letter_id', '');
        $letter = Letter::find($letter_id);
        $letter->like += 1;
        $letter->save();
        return [
            'code' => '1',
            'data' => ''
        ];
    }
}
