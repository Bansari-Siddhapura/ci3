<div x-show="type == 'dashboard'">
    <h1>dashboard</h1>
</div>

<div x-show="type == 'getRows'">
    <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
        <h1 class="text-2xl font-semibold">Get Rows</h1>
    </div>
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
        <thead>
            <tr class="bg-gray-200 text-black text-left">
                <th class="px-6 py-3 text-sm font-medium">Id</th>
                <th class="px-6 py-3 text-sm font-medium">Comapny</th>
                <th class="px-6 py-3 text-sm font-medium">Phone</th>
                <th class="px-6 py-3 text-sm font-medium">City</th>
                <th class="px-6 py-3 text-sm font-medium">State</th>
            </tr>
        </thead>
        <tbody>
            <?php //dd($getRows)  
            foreach ($get_rows as $data) {
            ?>
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 border-t text-sm text-gray-700"><?= $data->id ?></td>
                    <td class="px-6 py-4 border-t text-sm text-gray-700"><?= $data->company ?></td>
                    <td class="px-6 py-4 border-t text-sm text-gray-700"><?= $data->phone ?></td>
                    <td class="px-6 py-4 border-t text-sm text-gray-700"><?= $data->city ?></td>
                    <td class="px-6 py-4 border-t text-sm text-gray-700"><?= $data->state ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div x-show="type == 'rowSorted'">
    <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
        <h1 class="text-2xl font-semibold">Row Sorted</h1>
    </div>
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
        <thead>
            <tr class="bg-gray-200 text-black text-left">
                <th class="px-6 py-3 text-sm font-medium">Comapny</th>
                <th class="px-6 py-3 text-sm font-medium">Phone</th>
                <th class="px-6 py-3 text-sm font-medium">City</th>
                <th class="px-6 py-3 text-sm font-medium">State</th>
            </tr>
        </thead>
        <tbody>
            <?php //dd($getRows)  
            foreach ($row_sorted as $data) {
            ?>
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 border-t text-sm text-gray-700"><?= $data->id ?></td>
                    <td class="px-6 py-4 border-t text-sm text-gray-700"><?= $data->company ?></td>
                    <td class="px-6 py-4 border-t text-sm text-gray-700"><?= $data->city ?></td>
                    <td class="px-6 py-4 border-t text-sm text-gray-700"><?= $data->state ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>