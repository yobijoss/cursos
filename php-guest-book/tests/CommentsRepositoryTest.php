<?php

use PHPUnit\Framework\TestCase;

class CommentsRepositoryTest extends TestCase
{
    public function testGetCommentsWillReturnACommentsArray()
    {
        $jsonFile = __DIR__ . '/test_comments.json';
        $serializer = new CommentsJsonSerializer();
        $sut = new CommentsRepository( $jsonFile , $serializer);

        foreach ( $sut->read() as $comment ) {
            $this->assertInstanceOf( Comment::class, $comment );
        }
    }
}