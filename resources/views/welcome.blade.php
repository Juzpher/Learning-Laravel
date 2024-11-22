<x-layout>
    <x-slot:heading>Home</x-slot:heading>
    <?php
    if (DB::connection()->getDatabaseName()) {
        echo 'Connected to DB ' . DB::connection()->getDatabaseName();
    }
    
    ?>
</x-layout>
