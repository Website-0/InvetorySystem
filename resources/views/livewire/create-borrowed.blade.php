<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden"></span>​

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Name Of Borrower:</label>
                            <input type="text"
                                class="@error('borrowersname') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Name of Borrower" wire:model="borrowersname">
                            @error('borrowersname') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Event:</label>
                            <input type="text"
                                class="@error('event') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Lastname" wire:model="event">
                            @error('event') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Event Place:</label>
                            <input type="text"
                                class="@error('eventplace') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Lastname" wire:model="eventplace">
                            @error('eventplace') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Event Date:</label>
                            <input type="date"
                                class="@error('eventdate') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Lastname" wire:model="eventdate">
                            @error('eventdate') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Equipment Borrowed:</label>
                            <select class="@error('equipment_item_id') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="sel1" wire:model="equipment_item_id">
                                <option>Select </option>
                                @foreach ($equipments as $equipment)
                                <option value="{{$equipment->id}}">{{$equipment->name}}</option>
                                @endforeach
                            </select>
                            @error('equipment_item_id') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"  class="btn btn-success border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full mt-2">
                            Add
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button" class="btn btn-light border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full mt-2">
                            Cancel
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
