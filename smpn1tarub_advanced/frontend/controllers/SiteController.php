<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\JadwalujianModel;
use frontend\models\JadwalmapelModel;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $this->layout = 'home';

        $posting = \frontend\models\PostingModel::find()->where(['kategori' => 'posting'])->orderBy('id_posting')->limit(5)->all();
        $infosekolah = \frontend\models\PostingModel::find()->where(['kategori' => 'info_sekolah'])->orderBy('id_posting')->limit(5)->all();

        return $this->render('index', ['posting' => $posting, 'infosekolah' => $infosekolah]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin() {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            echo 'aoeuhaoetuhntoea';
            return $this->goHome();
        } else {
            
            return $this->goHome();
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionKeluar() {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

    public function actionProfile() {
        return $this->render('profil');
    }

    public function actionAgenda() {
        return $this->render('agenda');
    }

    public function actionBerita() {
        return $this->render('berita');
    }

    public function actionEkstrakulikuler() {
        $posting = \frontend\models\PostingModel::find()->where(['kategori' => 'ekstrakulikuler'])->limit(1)->all();

        return $this->render('ekstrakulikuler', ['posting' => $posting]);
    }

    public function actionElearning() {
        $elearning = \frontend\models\MateriModel::find()->all();
        return $this->render('elearning', ['elearning' => $elearning]);
    }

    public function actionGalerifoto() {
        return $this->render('galerifoto');
    }

    public function actionHubungikami() {
        return $this->render('hubungikami');
    }

    public function actionKalendarakademik() {
        $NamaBulan = Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli",
            "Agustus", "September", "Oktober", "November", "Desember");

        if (!isset($_REQUEST["bulan"]))
            $_REQUEST["bulan"] = date("m");
        if (!isset($_REQUEST["tahun"]))
            $_REQUEST["tahun"] = date("Y");

        $cBulan = $_REQUEST["bulan"];
        $cTahun = $_REQUEST["tahun"];

        $prev_tahun = $cTahun;
        $next_tahun = $cTahun;
        $prev_bulan = $cBulan - 1;
        $next_bulan = $cBulan + 1;

        if ($next_bulan == 13) {
            $next_bulan = 1;
            $next_tahun = $cTahun + 1;
        }
        if ($prev_bulan == 0) {
            $prev_bulan = 12;
            $prev_tahun = $cTahun - 1;
        }
        return $this->render('kalendarakademik', [
                    'prev_bulan' => $prev_bulan,
                    'prev_tahun' => $prev_tahun,
                    'next_bulan' => $next_bulan,
                    'next_tahun' => $next_tahun,
                    'NamaBulan' => $NamaBulan,
                    'cTahun' => $cTahun,
                    'cBulan' => $cBulan
        ]);
    }

    public function actionJadwalujian() {

        $kelasurutan = JadwalujianModel::find()->select('Kelas')->distinct()->all();
        $kelas = array();
        foreach ($kelasurutan as $value) {
            $kelasa = $value->Kelas;
            $hari = JadwalujianModel::find()->select('Hari')->distinct()->where(['Kelas' => $kelasa])->all();

            foreach ($hari as $valueHari) {
                $kelas[$kelasa][$valueHari->Hari] = JadwalujianModel::find()->orderBy('Hari')->where(['Hari' => $valueHari->Hari, 'Kelas' => $kelasa])->all();
            }
        }

        return $this->render('jadwalujian', ['kelas' => $kelas]);
    }

    public function actionJadwalpelajaran() {
        if (!\Yii::$app->user->isGuest) {
            if (\Yii::$app->user->identity->username == Yii::$app->request->get('id')) {
                $kelasurutan = JadwalmapelModel::find()->select('Kelas')->distinct()->where(['Kelas' => Yii::$app->request->get('kelas')])->all();
                $kelas = array();
                foreach ($kelasurutan as $value) {
                    $kelasa = $value->Kelas;
                    $hari = JadwalmapelModel::find()->select('Hari')->distinct()->where(['Kelas' => $kelasa])->all();

                    foreach ($hari as $valueHari) {
                        $kelas[$kelasa][$valueHari->Hari] = JadwalmapelModel::find()->orderBy('Hari')->where(['Hari' => $valueHari->Hari, 'Kelas' => $kelasa])->all();
                    }
                }

                return $this->render('jadwalpelajaran', ['kelas' => $kelas]);
            }
        }

        $kelasurutan = JadwalmapelModel::find()->select('Kelas')->distinct()->all();

        return $this->render('daftarkelaspelajaran', ['kelas' => $kelasurutan]);
    }

    public function actionDaftarkelaspelajaran() {
        $kelasurutan = JadwalmapelModel::find()->select('Kelas')->distinct()->all();

        return $this->render('daftarkelaspelajaran', ['kelas' => $kelasurutan]);
    }

    public function actionPetasitus() {
        return $this->render('petasitus');
    }

    public function actionPrestasisekolah() {
        $posting = \frontend\models\PostingModel::find()->where(['kategori' => 'prestasi'])->limit(1)->all();

        return $this->render('prestasisekolah', ['posting' => $posting]);
    }

    public function actionSambutankepsek() {
        return $this->render('sambutankepsek');
    }

    public function actionSaranadanprasarana() {
        $posting = \frontend\models\PostingModel::find()->where(['kategori' => 'sarana'])->limit(1)->all();

        return $this->render('saranadanprasarana', ['posting' => $posting]);
    }

    public function actionSejarah() {
        $posting = \frontend\models\PostingModel::find()->where(['kategori' => 'sejarah'])->limit(1)->all();

        return $this->render('sejarah', ['posting' => $posting]);
    }

    public function actionSiswa() {
        $siswa = \frontend\models\SiswaModel::find()->all();

        return $this->render('siswa', ['siswa' => $siswa]);
    }

    public function actionStrukturorganisasi() {
        $visimisi = \frontend\models\PostingModel::find()->where(['kategori' => 'struktur'])->limit(1)->all();

        return $this->render('strukturorganisasi', ['posting' => $visimisi]);
    }

    public function actionVisidanmisi() {
        $visimisi = \frontend\models\PostingModel::find()->where(['kategori' => 'visi_misi'])->limit(1)->all();

        return $this->render('visidanmisi', ['posting' => $visimisi]);
    }

}
