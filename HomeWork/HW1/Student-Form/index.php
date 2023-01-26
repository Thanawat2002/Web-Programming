<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="flex justify-center items-center  h-[100vh] rounded-t-lg overflow-hidden border-t border-l border-r border-gray-400 px-3 py-10 bg-gray-200 flex justify-center">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 ">
            <h2 class="text-xl text-center">แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2><br>
            <form action="lab2-27cal.php" method="post" name="form1" id="form1">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            ชื่อนักศึกษา
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="grid-first-name" type="text" name="fname" placeholder="ชื่อนักศึกษา">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            นามสกุลนักศึกษา
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="grid-last-name" type="text" name="lname" placeholder="นามสกุลนักศึกษา">
                    </div>
                </div>

                <div class="md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="stdID">
                        รหัสนักศึกษา
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ID" type="text" name="stdID" placeholder="รหัสนักศึกษา">
                </div>

                <div class="md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        รหัสผ่าน
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ID" type="password" name="password" placeholder="รหัสผ่าน">
                </div>
                <div class="md-4">
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="grid-state">
                                เพศ
                            </label>
                            <div class="relative">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="sex" control-id="ControlID-12">
                                    <option value="1">ชาย</option>
                                    <option value="2">หญิง</option>
                                    <option value="3">อื่นๆ</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        งานอดิเรก
                    </label>

                    <div class="flex items-center mb-4">
                        <div class="flex items-center mr-4">
                            <input id="default-checkbox" type="checkbox" name="hobby1" value="อ่านหนังสือ" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">อ่านหนังสือ</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="default-checkbox" type="checkbox" name="hobby2" value="ดูโทรทัศน์" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">ดูโทรทัศน์</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="default-checkbox" type="checkbox" name="hobby3" value="เล่นกีฬา" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">เล่นกีฬา</label>
                        </div>
                    </div>

                </div>

                <div class="md-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        เลือกสีที่ชอบ
                    </label>

                    <div class="flex flex-wrap">
                        <div class="flex items-center mr-4">
                            <input id="red-checkbox" type="checkbox" name="chkColor[]" value="Red" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="red-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Red</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="green-checkbox" type="checkbox" name="chkColor[]" value="Green" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="green-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Green</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="purple-checkbox" type="checkbox" name="chkColor[]" value="Purple" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="purple-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Purple</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="teal-checkbox" type="checkbox" name="chkColor[]" value="Teal" class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 rounded focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="teal-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Teal</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="yellow-checkbox" type="checkbox" name="chkColor[]" value="Yellow" class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="yellow-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yellow</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="orange-checkbox" type="checkbox" name="chkColor[]" value="Orange" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="orange-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Orange</label>
                        </div>
                    </div>
                </div>
                <br>

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">อัพโหลดข้อมูล</label>
                <input class="upload block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="Upload">

                <br>
                <div class="md-4">
                    <div class="flex items-center justify-between">
                        <button class="submit bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="submit" class="">
                            Submit
                        </button>
                        <button class="reset bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="reset">
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>