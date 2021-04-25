<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Berita
 *
 * @property int $id
 * @property string $gambar
 * @property string $judul
 * @property string $isi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Berita newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Berita newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Berita query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Berita whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Berita whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Berita whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Berita whereIsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Berita whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Berita whereUpdatedAt($value)
 */
	class Berita extends \Eloquent {}
}

namespace App{
/**
 * App\Donor
 *
 * @property int $userid
 * @property string $goldar
 * @property string $umur
 * @property string $beratbadan
 * @property string $penyakit
 * @property string $lokasi
 * @property int $isaccepted
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereBeratbadan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereGoldar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereIsaccepted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor wherePenyakit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereUmur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereUserid($value)
 */
	class Donor extends \Eloquent {}
}

