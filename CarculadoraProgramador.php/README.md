# 🧮 Calculadora de Programador en PHP

## 🚀 Características

- **Conversión Multibase:** Visualización instantánea en sistemas:
  - Hexadecimal (Base 16)
  - Decimal (Base 10)
  - Octal (Base 8)
  - Binario (Base 2) con separación de nibbles (grupos de 4 bits).
- **Operaciones Bitwise:**
  - `AND (&)`, `OR (|)`, `XOR (^)`
  - Desplazamiento de bits a la izquierda (`<<` LSH).
- **Interfaz Responsiva:** Diseño oscuro (Dark Mode) optimizado con CSS Moderno (Grid y Flexbox).
- **Compatibilidad:** Código optimizado para servidores PHP modernos y versiones heredadas (PHP 5.6+).

## 🛠️ Tecnologías utilizadas

- **Backend:** PHP (Manejo de estados mediante `POST`).
- **Frontend:** HTML5 y CSS3 (Variables CSS, Grid Layout).
- **Entorno recomendado:** UwAmp, XAMPP o cualquier servidor con soporte PHP.

## 📖 Explicación Técnica

Este proyecto fue desarrollado como parte de las prácticas de programación en el **IFTS 12 (Instituto de Formación Técnica Superior)** para comprender cómo los sistemas computacionales procesan la información.

### ¿Cómo funciona?

1. **Captura de Datos:** Se reciben los números a través de variables globales `$_POST`.
2. **Lógica de Conversión:** Se utilizan funciones nativas de PHP como `dechex()`, `decbin()` y `decoct()`.
3. **Álgebra de Boole:** Las operaciones lógicas se aplican directamente sobre las variables enteras, permitiendo observar el comportamiento de los bits individuales.
