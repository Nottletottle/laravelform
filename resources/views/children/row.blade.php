<tr>
    <td>
        <a href="{{ route('delete', ['id' => $child->id]) }}">
            <button type="submit" class="btn btn-danger btn-sm deleteRow">Delete</button>
        </a>
    </td>
    <td>
        <input type="hidden" name="children[{{ $child->id ?? 'new' }}][id]" value="{{ $child->id ?? '' }}">
        <input type="text" name="children[{{ $child->id ?? 'new' }}][first_name]" value="{{ old('children.' . ($child->id ?? 'new') . '.first_name', isset($child) && $child->first_name !== '' ? $child->first_name : null) }}">
        @error('children.' . ($child->id ?? 'new') . '.first_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
    <td>
        <input type="text" name="children[{{ $child->id ?? 'new' }}][middle_name]" value="{{ old('children.' . ($child->id ?? 'new') . '.middle_name', isset($child) && $child->middle_name !== '' ? $child->middle_name : null) }}">
        @error('children.' . ($child->id ?? 'new') . '.middle_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
    <td>
        <input type="text" name="children[{{ $child->id ?? 'new' }}][last_name]" value="{{ old('children.' . ($child->id ?? 'new') . '.last_name', isset($child) && $child->last_name !== '' ? $child->last_name : null) }}">
        @error('children.' . ($child->id ?? 'new') . '.last_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
    <td>
        <input type="text" name="children[{{ $child->id ?? 'new' }}][age]" value="{{ old('children.' . ($child->id ?? 'new') . '.age', isset($child) && $child->age !== '' ? $child->age : null) }}">
        @error('children.' . ($child->id ?? 'new') . '.age')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
    <td>
        <select name="children[{{ $child->id ?? 'new' }}][gender]">
            <option value="Male" {{ (old('children.' . ($child->id ?? 'new') . '.gender', isset($child) ? $child->gender : '') == 'Male') ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ (old('children.' . ($child->id ?? 'new') . '.gender', isset($child) ? $child->gender : '') == 'Female') ? 'selected' : '' }}>Female</option>
            <option value="Other" {{ (old('children.' . ($child->id ?? 'new') . '.gender', isset($child) ? $child->gender : '') == 'Other') ? 'selected' : '' }}>Other</option>
        </select>
        @error('children.' . ($child->id ?? 'new') . '.gender')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
    <td>
        <input type="hidden" name="children[{{ $child->id ?? 'new' }}][different_address]" value="0">
        <input type="checkbox" name="children[{{ $child->id ?? 'new' }}][different_address]" class="differentAddressCheckbox" onchange="toggleAddressFields(this)" value="1" {{ (old('children.' . ($child->id ?? 'new') . '.different_address', isset($child) && $child->different_address ? 'checked' : '')) }}>
        @error('children.' . ($child->id ?? 'new') . '.different_address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
    <td>
        <input type="text" name="children[{{ $child->id ?? 'new' }}][address]" class="address-field" value="{{ old('children.' . ($child->id ?? 'new') . '.address', isset($child) && $child->address !== '' ? $child->address : null) }}">
        @error('children.' . ($child->id ?? 'new') . '.address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
    <td>
        <input type="text" name="children[{{ $child->id ?? 'new' }}][city]" class="address-field" value="{{ old('children.' . ($child->id ?? 'new') . '.city', isset($child) && $child->city !== '' ? $child->city : null) }}">
        @error('children.' . ($child->id ?? 'new') . '.city')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
    <td>
        <input type="text" name="children[{{ $child->id ?? 'new' }}][state]" class="address-field" value="{{ old('children.' . ($child->id ?? 'new') . '.state', isset($child) && $child->state !== '' ? $child->state : null) }}">
        @error('children.' . ($child->id ?? 'new') . '.state')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
    <td>
        <select name="children[{{ $child->id ?? 'new' }}][country]" class="address-field">
            <option value="USA" {{ (old('children.' . ($child->id ?? 'new') . '.country', isset($child) ? $child->country : '') == 'USA') ? 'selected' : '' }}>USA</option>
            <option value="Canada" {{ (old('children.' . ($child->id ?? 'new') . '.country', isset($child) ? $child->country : '') == 'Canada') ? 'selected' : '' }}>Canada</option>
            <option value="UK" {{ (old('children.' . ($child->id ?? 'new') . '.country', isset($child) ? $child->country : '') == 'UK') ? 'selected' : '' }}>UK</option>
        </select>
        @error('children.' . ($child->id ?? 'new') . '.country')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
    <td>
        <input type="text" name="children[{{ $child->id ?? 'new' }}][zip]" class="address-field" value="{{ old('children.' . ($child->id ?? 'new') . '.zip', isset($child) && $child->zip !== '' ? $child->zip : null) }}">
        @error('children.' . ($child->id ?? 'new') . '.zip')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
</tr>
