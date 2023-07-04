<x-tests.app>
    <x-slot name="header">ヘッダ-1</x-slot>
    コンポーネントテスト1
    <x-tests.card title="タイトル1" content="aaaaa" :message="$message"/>
    <x-tests.card title="CSS変更" class="bg-red-300"/>
</x-tests.app>
