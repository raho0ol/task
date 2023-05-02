@extends('layout')

@section('main-content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">إضافة مهمة جديدة</h4>
        </div>
        <div class="float-end">
            <a href="{{ route('index') }}" class="btn btn-info">
                <i class="fa fa-arrow-right"></i> عودة للرئيسية
            </a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="card card-body bg-light p-4">
        <form action="{{ route('task.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">العنوان</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">التفاصيل</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">الحالة</label>
                <select name="status" id="status" class="form-control">
                    @foreach ($statuses as $status)
                        <option value="{{ $status['value'] }}">{{ $status['label'] }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i>
                حفظ
            </button>

            <a href="{{ route('index') }}" class="btn btn-danger mr-2"><i class="fa fa-arrow-right"></i> إلغاء</a>
        </form>
    </div>
@endsection
