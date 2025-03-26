<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<form action="form.php" method="post">
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
        <div class="relative bg-white pt-10 pb-8 px-10 shadow-xl mx-auto w-96 rounded-lg">
            <div class="divide-y divide-gray-300/50 w-full">
                <div class="space-y-6 py-8 text-base  text-gray-600">

                    <?php if (isset($_GET['message'])): ?>
                        <p class="text-sm text-red-500"><?= $_GET['message']; ?></p>
                    <?php endif; ?>
                    <div class="pt-8 text-base font-semibold leading-7">
                    <button type="Back" class="bg-sky-500 hover:bg-sky-600 px-4 py-1 text-white rounded">
                        Back
                    </button>
                    </div>

                    <p class="text-xl font-medium leading-7"></p>
                    <div class="space-y-4 flex flex-col">
                        <div align="left"><label id="lblText">Category:</label></div>
                        <input type="Category"
                               name="Category"
                               placeholder=""
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>

                        <div align="left"><label id="lblText">Item name:</label></div>
                        <input type="Item name"
                               name="Item name"
                               placeholder=""
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>

                        <div align="left"><label id="lblText">Qty:</label></div>
                        <input type="Qty"
                               name="Qty"
                               placeholder=""
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>

                        <div align="left"><label id="lblText">Price:</label></div>
                        <input type="Price"
                               name="Price"
                               placeholder=""
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>
                    </div>
                </div>
                <div class="pt-8 text-base font-semibold leading-7">
                    <button type="submit" class="bg-sky-500 hover:bg-sky-600 px-4 py-1 text-white rounded">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>


</body>
</html>
