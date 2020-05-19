@if (currentUser()->isNot($user))
    <form method="POST" action="/profiles/{{ $user->name }}/follow">
        @csrf

        <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
            {{ currentUser()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>
@endif