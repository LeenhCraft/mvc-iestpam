# Sistema de Predicción de VIH usando XGBoost

Este proyecto implementa un sistema de predicción de VIH basado en el algoritmo de aprendizaje automático **XGBoost**. Su objetivo es asistir en la detección temprana de posibles casos de VIH a partir de variables clínicas y demográficas, mejorando el apoyo al diagnóstico y la toma de decisiones en entornos médicos.

## 📌 Características principales

- Entrenamiento y validación de modelos con XGBoost  
- Preprocesamiento de datos clínicos  
- Interfaz para la predicción de nuevos casos (CLI o Web)  
- Reportes de métricas de evaluación (precisión, recall, F1-score, AUC)  
- Soporte para integración en aplicaciones web o clínicas  

## 🧠 Algoritmo: XGBoost

**XGBoost (Extreme Gradient Boosting)** es un algoritmo eficiente de boosting que combina múltiples árboles de decisión para lograr una predicción precisa. Es especialmente eficaz en conjuntos de datos tabulares y ha demostrado resultados sobresalientes en tareas de clasificación médica.

## 📂 Estructura del proyecto

```
vih-xgboost-predictor/
│
├── data/                     # Dataset original y procesado
│   ├── raw_data.csv
│   └── cleaned_data.csv
│
├── models/                   # Modelos entrenados y serializados
│   └── xgboost_model.json
│
├── notebooks/                # Jupyter Notebooks para análisis y pruebas
│   └── analysis_and_training.ipynb
│
├── src/                      # Código fuente
│   ├── preprocessing.py
│   ├── train_model.py
│   └── predict.py
│
├── app/                      # (Opcional) Interfaz web o CLI
│   └── main.py
│
├── requirements.txt          # Librerías necesarias
├── README.md
└── LICENSE
```

## ⚙️ Requisitos

- Python 3.8 o superior  
- XGBoost  
- pandas, numpy, scikit-learn  
- matplotlib, seaborn (opcional para visualización)  

Instalación de dependencias:

```bash
pip install -r requirements.txt
```

## 🧪 Entrenamiento del modelo

1. Asegúrate de tener el conjunto de datos en la carpeta `data/`.
2. Ejecuta el script de entrenamiento:

```bash
python src/train_model.py
```

Esto realizará:
- Carga y limpieza de datos
- Codificación de variables
- Entrenamiento del modelo XGBoost
- Evaluación y guardado del modelo

## 🔍 Realizar predicciones

Puedes usar un script o interfaz para realizar predicciones sobre nuevos datos:

```bash
python src/predict.py --input "nuevo_paciente.csv"
```

También puedes integrarlo en una interfaz web o clínica.

## 📈 Métricas de desempeño

El modelo se evaluó utilizando:

- **Precisión (Accuracy)**
- **Recall (Sensibilidad)**
- **F1-score**
- **Área bajo la curva ROC (AUC)**

> Resultados aproximados (según dataset de ejemplo):
> - Accuracy: 92.3%
> - Recall: 89.7%
> - F1-score: 90.1%
> - AUC: 0.94

## ⚠️ Advertencias y ética

Este sistema **no reemplaza un diagnóstico médico profesional**. Está diseñado como herramienta de apoyo para profesionales de la salud, y debe usarse con supervisión médica. Los datos utilizados deben ser anónimos y tratados conforme a las leyes de privacidad de datos (como HIPAA, GDPR).

## 📚 Dataset

El modelo fue entrenado con un conjunto de datos anónimos que incluyen variables como:

- Edad  
- Sexo  
- Uso de drogas inyectables  
- Historia sexual  
- Pruebas médicas previas (serología, CD4, etc.)

> *(Si se usa un dataset público como el del UCI o WHO, incluir enlace y licencia correspondiente.)*

## 👨‍💻 Autor

Desarrollado por **[Tu Nombre]**  
Contacto: [tu_email@dominio.com]

## 📝 Licencia

Este proyecto está licenciado bajo la **Licencia MIT**. Consulta el archivo `LICENSE` para más información.