<?php

/*
 * This file is part of the Social Feed Util.
 *
 * (c) LaNetscouade <contact@lanetscouade.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Lns\SocialFeed\Model;

/**
 * InstagramPost.
 */
class InstagramPost extends AbstractPost implements PostInterface
{
    public function getType()
    {
        return 'instagram_post';
    }
}
