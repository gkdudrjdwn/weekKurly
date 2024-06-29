# 리액트 프로젝트 생성

## 프로젝트 폴더 생성

## 프로젝트 생성

1. app 프로젝트 생성
   CTRL + SHIFT + `

```JS
    npx create-react-app app

    cd app
    npm start
```


## 컴포넌트 생성(모듈) import / export

## 헤더컴포넌트 => 네비게이션 => 링크 => 라우터

2. [public] 퍼블릭 구성요소 정적 폴더 public 정리  
   [css]
   [img]
   [js]
   index.html

3. [src] 에스알씨 구성요소 동적 폴더 src 정리  
   [component]  
   index.js

4. [component] 컴포넌트 구성요소
   WrapComponent.jsx
   [wrap]

5. [wrap] 컴포넌트 구성요소
   [main]
   [sub]
   HeaderComponent.jsx
   MainComponent.jsx
   FooterComponent.jsx

# 자동완성 컴포넌트

- rsf 함수 컴포넌트 function 함수
- rsc 함수 컴포넌트 화살표함수
- rcc 클래스 컴포넌트

6. HeaderComponent.jsx 헤더컴포넌트 JSX 코딩

   - class= => className=  
     CTRL + H => class= 문자열을 className= 으로변경
   - <img src='' alt='' > => <img src='' alt='' />
   - <br> => <br />
   - <input type='' .... > => <input type='' .... />
   - <a href='#'> => <a href='!#'>
   - 링크태그 네비게이션 => 라우터 링크 구현

7. ModalTopComponent.jsx 탑모달컴포넌트 JSX 코딩

8. [main] 메인페이지
   Section1Component.jsx
   Section2Component.jsx
   Section3Component.jsx
   Section4Component.jsx
   Section5Component.jsx
   Section6Component.jsx
   Section7Component.jsx
   Section8Component.jsx
   Section9Component.jsx
   Section10Component.jsx
   Section11Component.jsx
   Section12Component.jsx
   Section13Component.jsx

9. [sub] 서브페이지
   [scss]
   SubPublicComponent.scss
   Sub1Component.jsx // 신상품
   Sub2Component.jsx // 베스트
   Sub3Component.jsx // 알뜰상품
   Sub4Component.jsx // 특가/혜택
   Sub5Component.jsx // 회원가입폼
   Sub6Component.jsx // 로그인
   Sub7Component.jsx // 공지사항(고객센터)

10. SASS 패키지 설치
    npm i sass;

11. [main] 사스 폴더 생성
    [scss]
    SectionPublicComponent.scss
    Section1Component.scss
    Section2Component.scss
    Section3Component.scss
    Section4Component.scss
    Section5Component.scss

12. WrapComponent.jsx => 라우터(Router) 설치
    npm i react-router-dom

13. WrapComponent.jsx => 라우터(Router) 구성요소 & 구현
    13-1. import {BrowserRouter, Routes, Route} 'react-router-dom'
    13-2. <BrowserRouter>로 컴포넌트를 감싸준다  
    13-3. <Routes>로 컴포넌트를 감싸준다
    13-4. <Route>로 컴포넌트를 감싸준다
    13-5. 패스네임(PathName) 설정 => <Route path='/main' element={<MainComponent />} />

```JS
      <BrowserRouter>
         <ModalTopComponent /> {/* 고정페이지 */}
         <Routes>
            <Route path='/' element={<HeaderComponent />}>
               <Route index element={<MainComponent />} />
               <Route path='/main' element={<MainComponent />} />
               <Route path='/sub1' element={<Sub1Component />} />
               <Route path='/sub2' element={<Sub2Component />} />
               <Route path='/sub3' element={<Sub3Component />} />
               <Route path='/sub4' element={<Sub4Component />} />
               <Route path='/sub5' element={<Sub5Component />} />
               <Route path='/sub6' element={<Sub6Component />} />
               <Route path='/sub7' element={<Sub7Component />} />
            </Route>
         </Routes>
         <FooterComponent /> {/* 고정페이지 */}
      </BrowserRouter>

```

14. HeaderComponent.jsx 헤더컴포넌트
    => 아울렛(페이지전환) 컴포넌트변경된다.
    => 링크걸어준다 => 패스네임

```JS
   <Link to='/sub1' className='main-btn'>신상품</Link>
   <Link to='/sub2' className='main-btn'>베스트</Link>
   <Link to='/sub3' className='main-btn'>알뜰상품</Link>
   <Link to='/sub4' className='main-btn'>특가/혜택</Link>
   <Link to='/sub5' className='on'>회원가입</Link>
   <Link to='/sub6'>로그인</Link>
   <Link to='/sub7'>고객센터</Link>
```

# Getting Started with Create React App

This project was bootstrapped with [Create React App](https://github.com/facebook/create-react-app).

## Available Scripts

In the project directory, you can run:

### `npm start`

Runs the app in the development mode.\
Open [http://localhost:3000](http://localhost:3000) to view it in your browser.

The page will reload when you make changes.\
You may also see any lint errors in the console.

### `npm test`

Launches the test runner in the interactive watch mode.\
See the section about [running tests](https://facebook.github.io/create-react-app/docs/running-tests) for more information.

### `npm run build`

Builds the app for production to the `build` folder.\
It correctly bundles React in production mode and optimizes the build for the best performance.

The build is minified and the filenames include the hashes.\
Your app is ready to be deployed!

See the section about [deployment](https://facebook.github.io/create-react-app/docs/deployment) for more information.

### `npm run eject`

**Note: this is a one-way operation. Once you `eject`, you can't go back!**

If you aren't satisfied with the build tool and configuration choices, you can `eject` at any time. This command will remove the single build dependency from your project.

Instead, it will copy all the configuration files and the transitive dependencies (webpack, Babel, ESLint, etc) right into your project so you have full control over them. All of the commands except `eject` will still work, but they will point to the copied scripts so you can tweak them. At this point you're on your own.

You don't have to ever use `eject`. The curated feature set is suitable for small and middle deployments, and you shouldn't feel obligated to use this feature. However we understand that this tool wouldn't be useful if you couldn't customize it when you are ready for it.

## Learn More

You can learn more in the [Create React App documentation](https://facebook.github.io/create-react-app/docs/getting-started).

To learn React, check out the [React documentation](https://reactjs.org/).

### Code Splitting

This section has moved here: [https://facebook.github.io/create-react-app/docs/code-splitting](https://facebook.github.io/create-react-app/docs/code-splitting)

### Analyzing the Bundle Size

This section has moved here: [https://facebook.github.io/create-react-app/docs/analyzing-the-bundle-size](https://facebook.github.io/create-react-app/docs/analyzing-the-bundle-size)

### Making a Progressive Web App

This section has moved here: [https://facebook.github.io/create-react-app/docs/making-a-progressive-web-app](https://facebook.github.io/create-react-app/docs/making-a-progressive-web-app)

### Advanced Configuration

This section has moved here: [https://facebook.github.io/create-react-app/docs/advanced-configuration](https://facebook.github.io/create-react-app/docs/advanced-configuration)

### Deployment

This section has moved here: [https://facebook.github.io/create-react-app/docs/deployment](https://facebook.github.io/create-react-app/docs/deployment)

### `npm run build` fails to minify

This section has moved here: [https://facebook.github.io/create-react-app/docs/troubleshooting#npm-run-build-fails-to-minify](https://facebook.github.io/create-react-app/docs/troubleshooting#npm-run-build-fails-to-minify)
