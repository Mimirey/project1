<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="students-container">
        <table class="min-w-full border border-gray">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Grade</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-left">{{$loop->iteration}}</td>
                    <td class="border border-gray-300 px-4 py-2 text-left">{{$student['nama']}}</td>
                    <td class="border border-gray-300 px-4 py-2 text-left">{{$student['grade']}}</td>
                    <td class="border border-gray-300 px-4 py-2 text-left">{{$student['email']}}</td>
                    <td class="border border-gray-300 px-4 py-2 text-left">{{$student['address']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>