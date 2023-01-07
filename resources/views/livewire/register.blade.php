<div>
    <form wire:submit.prevent="register">
        <lavel for="name">名前</lavel>
        <input type="text" wire:model="name"><br>
        @error('name')
            <div class="text-red-400">{{ $message }}</div>
        @enderror
        <lavel for="email">メールアドレス</lavel>
        <input type="email" wire:model.lazy="email"><br>
        @error('email')
            <div class="text-red-400">{{ $message }}</div>
        @enderror
        <lavel for="password">パスワード</lavel>
        <input type="password" wire:model="password"><br>
        @error('password')
            <div class="text-red-400">{{ $message }}</div>
        @enderror
        <button>登録</button>
    </form>
</div>
