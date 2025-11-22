import React from 'react';
import { createRoot } from 'react-dom/client';
import './bootstrap';

const App: React.FC = () => {
    return (
        <div>
            <h1>Welcome to Napfény Tours</h1>
            <p>Your dream travel agency for Tunisia and Egypt</p>
        </div>
    );
};

// Mount the React app if there's a root element
const container = document.getElementById('react-app');
if (container) {
    const root = createRoot(container);
    root.render(<App />);
}

export default App;