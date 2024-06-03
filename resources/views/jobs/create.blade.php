<x-layout>
    <x-page-heading>
        New Job
    </x-page-heading>
    <x-forms.form action="/jobs" method="POST">
        <x-forms.input label="Title" name="title"  placeholder="CEO" required/>
        <x-forms.input label="Salary" name="salary"  placeholder="$90,000.00" required/>
        <x-forms.input label="Location" name="location"  placeholder="Winter Park, Florida" required/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url"  placeholder="http://acme.come/jobs/ceo-wanted" required/>
        <x-forms.checkbox label="Feature (Cost Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma seperated)" name="tags"  placeholder="laracast, video, education" required/>
        <x-forms.button>
            Publish
        </x-forms.button>
    </x-forms.form>
</x-layout>