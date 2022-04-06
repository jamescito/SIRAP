<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Areas
 *
 * @property int $id
 * @property string $codigoArea
 * @property string $area
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Areas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Areas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Areas query()
 * @method static \Illuminate\Database\Eloquent\Builder|Areas whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Areas whereCodigoArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Areas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Areas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Areas whereUpdatedAt($value)
 */
	class Areas extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Autores
 *
 * @property int $id
 * @property string $codigo
 * @property string $nombre
 * @property string $apellido
 * @property string $fecha_nacimiento
 * @property string $nacionalidad
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Autores newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Autores newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Autores query()
 * @method static \Illuminate\Database\Eloquent\Builder|Autores whereApellido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autores whereCodigo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autores whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autores whereFechaNacimiento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autores whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autores whereNacionalidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autores whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autores whereUpdatedAt($value)
 */
	class Autores extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Carrera
 *
 * @property int $id
 * @property string $codigoCarrera
 * @property string $carrera
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Carrera newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrera newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrera query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrera whereCarrera($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrera whereCodigoCarrera($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrera whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrera whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrera whereUpdatedAt($value)
 */
	class Carrera extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Detallelibro
 *
 * @property int $id
 * @property string $autoresCodigo
 * @property string $codigolibro
 * @property string $cantidadpaginas
 * @property string $libroOriginal
 * @property string $aniopublicacion
 * @property string $idioma
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Prestamos[] $prestamos
 * @property-read int|null $prestamos_count
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro query()
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro whereAniopublicacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro whereAutoresCodigo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro whereCantidadpaginas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro whereCodigolibro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro whereIdioma($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro whereLibroOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detallelibro whereUpdatedAt($value)
 */
	class Detallelibro extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Editoriales
 *
 * @property int $id
 * @property string $codigoEditorial
 * @property string $editorial
 * @property string $pais
 * @property string $correo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Editoriales newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Editoriales newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Editoriales query()
 * @method static \Illuminate\Database\Eloquent\Builder|Editoriales whereCodigoEditorial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Editoriales whereCorreo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Editoriales whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Editoriales whereEditorial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Editoriales whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Editoriales wherePais($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Editoriales whereUpdatedAt($value)
 */
	class Editoriales extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Estudiantes
 *
 * @property int $id
 * @property string $codigoCarnet
 * @property string $nombre
 * @property string $apellido
 * @property string $carrera_id
 * @property string $correo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Estudiantes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estudiantes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estudiantes query()
 * @method static \Illuminate\Database\Eloquent\Builder|Estudiantes whereApellido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estudiantes whereCarreraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estudiantes whereCodigoCarnet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estudiantes whereCorreo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estudiantes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estudiantes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estudiantes whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estudiantes whereUpdatedAt($value)
 */
	class Estudiantes extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Libros
 *
 * @property int $id
 * @property string $codigolibro
 * @property string $titulo
 * @property string $area_id
 * @property string $editoriales_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Prestamos[] $prestamos
 * @property-read int|null $prestamos_count
 * @method static \Illuminate\Database\Eloquent\Builder|Libros newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Libros newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Libros query()
 * @method static \Illuminate\Database\Eloquent\Builder|Libros whereAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Libros whereCodigolibro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Libros whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Libros whereEditorialesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Libros whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Libros whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Libros whereUpdatedAt($value)
 */
	class Libros extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Prestamos
 *
 * @property int $id
 * @property string $codigoPrestamo
 * @property string $estudiante_id
 * @property string $libro_id
 * @property string $fechaprestamo
 * @property string $fechadevolucion
 * @property string $fechaestadoprestamo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Estudiantes $estudiante
 * @property-read \App\Models\Libros $libro
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos query()
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos whereCodigoPrestamo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos whereEstudianteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos whereFechadevolucion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos whereFechaestadoprestamo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos whereFechaprestamo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos whereLibroId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prestamos whereUpdatedAt($value)
 */
	class Prestamos extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

