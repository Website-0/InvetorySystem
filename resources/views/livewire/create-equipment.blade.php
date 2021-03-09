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
                        <div class="col-md-12 form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" wire:model="photo">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @error('photo') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input type="text"
                                class="@error('name') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Control Number" wire:model="name">
                            @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Control Number:</label>
                            <input type="number"
                                class="@error('controlnumber') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Control Number" wire:model="controlnumber">
                            @error('controlnumber') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                            <input type="text"
                                class="@error('category') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Lastname" wire:model="category">
                            @error('category') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Brand:</label>
                            <input type="text"
                                class="@error('brand') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Lastname" wire:model="brand">
                            @error('brand') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Model:</label>
                            <input type="text"
                                class="@error('model') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Lastname" wire:model="model">
                            @error('model') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                            <input type="text"
                                class="@error('location') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Lastname" wire:model="location">
                            @error('location') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Purchase Price:</label>
                            <input type="number"
                                class="@error('purchaseprice') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Lastname" wire:model="purchaseprice">
                            @error('purchaseprice') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Year Of Purchase:</label>
                            <input type="date"
                                class="@error('yearofpurchase') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Lastname" wire:model="yearofpurchase">
                            @error('yearofpurchase') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Remarks:</label>
                            <input type="text"
                                class="@error('remarks') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Lastname" wire:model="remarks">
                            @error('remarks') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Accesories:</label>
                            <input type="text"
                                class="@error('accesories') is-invalid @enderror form-control w-full mt-1 block  rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="exampleFormControlInput1" placeholder="Enter Lastname" wire:model="accesories">
                            @error('accesories') <span class="text-red-500">{{ $message }}</span>@enderror
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
