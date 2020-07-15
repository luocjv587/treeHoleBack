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

class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }

    public function createLetter()
    {
        $letter_info = $this->request->input('letter_info', '');
        $letter = new Letter();
        $letter->letter_info = $letter_info;
        $letter->save();
        return [
            'code' => '1',
            'data' => ''
        ];
    }

    public function getLetter()
    {
        $letter = Letter::inRandomOrder()->first();
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
