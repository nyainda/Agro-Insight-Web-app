<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CommentItem extends Component
{
    public Comment $comment;
    public bool $editing = false;
    public bool $replying = false;

    protected $listeners = [
        'cancelEditing' => 'cancelEditing',
        'commentUpdated' => 'commentUpdated',
        'commentCreated' => 'commentCreated',
    ];

    public function mount(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function render()
    {
        return view('livewire.comment-item');
    }

    public function deleteComment()
    {
        // Check if the user is authenticated
        $user = auth()->user();
        if (!$user) {
            return redirect('/login');
        }

        // Check if the comment exists
        if (!$this->comment) {
            return response('Comment not found', 404);
        }

        // Check if the authenticated user is the owner of the comment
        if ($this->comment->user_id != $user->id) {
            return response('You are not allowed to perform this action', 403);
        }

        try {
            // Use a database transaction to ensure data integrity
            \DB::beginTransaction();

            // Delete the comment and related records (if any)
            $this->comment->delete();

            // Emit an event to notify parent components of the deletion
            $this->emitUp('commentDeleted', $this->comment->id);

            // Commit the transaction
            \DB::commit();

            // Return a success message if needed
            session()->flash('success', 'Comment deleted successfully');
        } catch (\Exception $e) {
            // Handle any exceptions and rollback the transaction if an error occurs
            \DB::rollBack();

            // Log the error for debugging
            \Log::error('Error deleting comment: ' . $e->getMessage());

            // Return an error response
            return response('An error occurred while deleting the comment', 500);
        }
    }

    public function startCommentEdit()
    {
        $this->editing = true;
    }

    public function cancelEditing()
    {
        $this->editing = false;
        $this->replying = false;
    }

    public function commentUpdated()
    {
        $this->editing = false;
    }

    public function startReply()
    {
        $this->replying = true;
    }

    public function commentCreated()
    {
        $this->replying = false;
    }
}
