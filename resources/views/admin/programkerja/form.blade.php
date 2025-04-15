<div class="mb-3">
    <label for="kegiatan" class="form-label">Kegiatan</label>
    <input type="text" name="kegiatan" class="form-control" value="{{ old('kegiatan', $programkerja->kegiatan ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi', $programkerja->deskripsi ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="tujuan" class="form-label">Tujuan</label>
    <textarea name="tujuan" class="form-control" rows="3">{{ old('tujuan', $programkerja->tujuan ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="tahap_pelaksanaan" class="form-label">Tahap Pelaksanaan</label>
    <textarea name="tahap_pelaksanaan" class="form-control" rows="3">{{ old('tahap_pelaksanaan', $programkerja->tahap_pelaksanaan ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="waktu_pelaksanaan" class="form-label">Waktu Pelaksanaan</label>
    <input type="date" name="waktu_pelaksanaan" class="form-control" value="{{ old('waktu_pelaksanaan', isset($programkerja) ? \Carbon\Carbon::parse($programkerja->waktu_pelaksanaan)->format('Y-m-d') : '') }}">
</div>

<div class="mb-3">
    <label for="tempat" class="form-label">Tempat</label>
    <input type="text" name="tempat" class="form-control" value="{{ old('tempat', $programkerja->tempat ?? '') }}">
</div>

<div class="mb-3">
    <label for="indikator" class="form-label">Indikator</label>
    <textarea name="indikator" class="form-control">{{ old('indikator', $programkerja->indikator ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="kekuatan" class="form-label">Kekuatan</label>
    <input type="text" name="kekuatan" class="form-control" value="{{ old('kekuatan', $programkerja->kekuatan ?? '') }}">
</div>

<div class="mb-3">
    <label for="kelemahan" class="form-label">Kelemahan</label>
    <input type="text" name="kelemahan" class="form-control" value="{{ old('kelemahan', $programkerja->kelemahan ?? '') }}">
</div>

<div class="mb-3">
    <label for="perkiraan_biaya" class="form-label">Perkiraan Biaya</label>
    <input type="number" name="perkiraan_biaya" class="form-control" value="{{ old('perkiraan_biaya', $programkerja->perkiraan_biaya ?? '') }}">
</div>

<div class="mb-3">
    <label for="sumber_dana" class="form-label">Sumber Dana / Biaya</label>
    <input type="text" name="sumber_dana" class="form-control" value="{{ old('sumber_dana', $programkerja->sumber_dana ?? '') }}">
</div>

<div class="form-check mb-3">
    <input type="checkbox" name="terlaksana" class="form-check-input" id="terlaksana" value="1"
        {{ old('terlaksana', $programkerja->terlaksana ?? false) ? 'checked' : '' }}>
    <label class="form-check-label" for="terlaksana">Sudah Terlaksana</label>
</div>
